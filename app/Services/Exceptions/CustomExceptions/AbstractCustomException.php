<?php

namespace App\Services\Exceptions\CustomExceptions;

use Throwable;

abstract class AbstractCustomException implements CustomExceptionInterface
{
    /** @var \Throwable */
    protected $exception;

    /**
     * AbstractCustomException constructor.
     * @param Throwable $exception
     */
    public function __construct(Throwable $exception)
    {
        $this->exception = $exception;
    }
}
