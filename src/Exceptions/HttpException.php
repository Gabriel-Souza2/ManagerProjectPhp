<?php

namespace SON\Framework\Exceptions;

class HttpException extends \Exception
{
    public function __construct($message, $code, \Exception $previus = null)
    {
        \http_response_code($code);
        parent::__construct($message, $code, $previus);
    }
}