<?php

namespace App\Services\Exceptions;

use Throwable;
use App\Services\Exceptions\Handlers\GetDataExceptionHandler;
use App\Services\Exceptions\CustomExceptions\CustomExceptionInterface;

class ExceptionService
{
    /** @var GetDataExceptionHandler */
    private $exceptionHandler;

    /**
     * ExceptionService constructor.
     * @param GetDataExceptionHandler $exceptionHandler
     */
    public function __construct(GetDataExceptionHandler $exceptionHandler)
    {
        $this->exceptionHandler = $exceptionHandler;
    }

    /**
     * @param Throwable $throwable
     * @return CustomExceptionInterface
     */
    public function getException(Throwable $throwable): CustomExceptionInterface
    {
        return $this->exceptionHandler->handle($throwable);
    }
}
