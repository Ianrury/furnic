<?php 

namespace Importa\Furnic\PHP\FFI\Exception;

class ValidationException extends \Exception
{
    public function __construct(string $message = "Validation Error", int $code = 422, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}