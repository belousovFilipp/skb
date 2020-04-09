<?php

namespace App\Services\Exceptions\Handlers;

use Throwable;
use App\Services\Exceptions\Factories\FactoryException;
use App\Services\Exceptions\Repositories\CustomExceptionsRepository;
use App\Services\Exceptions\CustomExceptions\CustomExceptionInterface;

class GetDataExceptionHandler
{
    /** @var FactoryException */
    private $factoryException;

    /** @var CustomExceptionsRepository */
    private $customExceptionsRepository;

    /**
     * GetDataExceptionHandler constructor.
     * @param FactoryException $factoryException
     * @param CustomExceptionsRepository $customExceptionsRepository
     */
    public function __construct(
        FactoryException $factoryException,
        CustomExceptionsRepository $customExceptionsRepository
    )
    {
        $this->factoryException = $factoryException;
        $this->customExceptionsRepository = $customExceptionsRepository;
    }

    /**
     * @param Throwable $exception
     * @return CustomExceptionInterface
     */
    public function handle(Throwable $exception): CustomExceptionInterface
    {
        return $this->factoryException->create(
            $exception,
            $this->customExceptionsRepository,
            (bool)env('APP_DEBUG', false)
        );
    }
}
