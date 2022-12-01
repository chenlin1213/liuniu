<?php


namespace crmeb\exceptions;


use Throwable;

class UtilException extends \RuntimeException
{

    /**
     * UtilException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        if (is_array($message)) {
            $errInfo = $message;
            $message = $errInfo[1] ?? '未知错误';
            $code = $errInfo[0] ?? 400;
        }

        parent::__construct($message, $code, $previous);
    }
}