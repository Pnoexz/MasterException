# PHP API Exception

PHP API Exception relies on the following principles:

- Each exception must be unique.
- Consumers MUST NOT rely on the human readable error message to identify it.
- Comply with PSR-3. See: https://www.php-fig.org/psr/psr-3/

## Signature

```php
/**
 * @param array           $data     Any JSON serializable data we should
 *                                  send to the user along with the built-in
 *                                  information
 * @param \Throwable|null $previous The previous exception thrown to
 *                                  maintain the exception chain
 */
ApiExceptionL::__construct(array $data = [], \Throwable $previous = null)
```

## Examples

### Simple usage

```php
<?php

namespace Pnoexz\Examples\Exceptions;

use Pnoexz\ApiException\Http\ClientError\NotFoundException;

class ArticleNotFoundException extends NotFoundException
{
    /**
     * @var string
     */
    public $message = "Article not found";
}
```

Will output the following JSON:

```json
{
  "class": "Pnoexz\\Examples\\Exceptions\\ArticleNotFoundException",
  "message": "Article not found",
  "statusCode": 404
}
```

### Creating a custom exception

If you need to support an HTTP Status Code that's not on the standard or is missing, it's possible to extend from `\Pnoexz\ApiException\Http\ClientError\ClientErrorException` (default level WARNING), `\Pnoexz\ApiException\Http\ServerError\ServerErrorException` (default level ERROR) or `Pnoexz\ApiException` (no default level).

```php
<?php

namespace Pnoexz\Examples\Exceptions;

use Pnoexz\ApiException;

class ArticleNotFoundException extends ApiException
{
    /**
     * @var int
     */
    protected $httpStatus = 701;

    /**
     * @var string
     */
    protected $level = \Psr\Log\LogLevel::WARNING;

    /**
     * @var string
     */
    public $message = "Article not found";
}
```

## Sending extra data to the client along with the exception

Suppose we are building an ecommerce system in which users can't have more than one pending cart at the same time. If the user tries to create a new cart, instead of simply displaying an error, we can send the entity to the client so they can gracefully handle the error and display information to the user.

### Exception
```php
<?php

namespace Pnoexz\Examples\Exceptions;

use Pnoexz\ApiException\Http\ClientError\ConflictException;

class PendingCartExistsException extends ConflictException
{
    /**
     * @var string
     */
    public $message = "A pending cart already exists";
}
```
### From the service
```php
$potentiallyPendingCart = $this->getPendingCartByUser($user);

if (!empty($potentiallyPendingCart)) {
    throw new PendingCartExistsException(['cart' => $potentiallyPendingCart]);
}

```

### Output to the client
```json
{
  "class": "Pnoexz\\Examples\\Exceptions\\PendingCartExistsException",
  "message": "A pending cart already exists",
  "statusCode": 409,
  "data": {
    "cart": {
      "id": 8,
      "items": [
          {"id": 8931}
      ]
    }
  }
}
```

## Maintaining the previously thrown exception

In this case, we will be catching an exception that contains sensitive data (a raw SQL query). We need to separate what the client will see and what we should log. This might require some extra code in our handler, but when throwing the exception, all we need to do is the pass what we caught to the second parameter.

```php
class FruitRepository
{
    public function get(int $id)
    {
        try {
            $sth = $this->dbh->prepare("
                SELECT name, colour, calories
                FROM fruit
                WHERE id = :id
            ");

            $sth->execute([':id' => $id]);
            return $sth->fetch(PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            throw new DatabaseException([], $e);
        }
    }
}
```

We can then catch this exception from the calling method and do similarly; maintaining the exception trace and sending back a nice output to the client.

### Handler

These examples use the Slim3 error handler but should work similarly with other frameworks.

#### Handling only ApiExceptions

```php
    /**
     * @param Request    $request
     * @param Response   $response
     * @param \Throwable $throwable
     * @return Response
     */
    public function __invoke(
        Request $request,
        Response $response,
        ApiException $exception
    ) {
        $encodedBody = \json_encode($exception);

        $this->log(
            $exception->getLevel(),
            $exception->getMessage(),
            $encodedBody
        );

        return $response->withJson($encodedBody, $exception->getStatusCode());
    }
```

#### Handling all exceptions

```php
    /**
     * @param Request    $request
     * @param Response   $response
     * @param \Throwable $throwable
     * @return Response
     */
    public function __invoke(
        Request $request,
        Response $response,
        \Throwable $throwable
    ) {
        $statusCode = 500;
        $level = LogLevel::ERROR;
        $message = $throwable->getMessage();

        if ($throwable instanceof ApiException) {
            $statusCode = $throwable->getStatusCode();
            $level = $throwable->getLevel();
        }

        $body = [
            'statusCode' => $statusCode,
            'level' => $level,
            'message' => $message,
        ];

        $this->log($level, $message, $body);

        return $response->withJson($body, $statusCode);
    }
```
