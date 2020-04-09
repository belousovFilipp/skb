<?php

namespace App\Services\Exceptions\Factories;

use Throwable;
use App\Services\Exceptions\CustomExceptions\CustomExceptionInterface;
use App\Services\Exceptions\Repositories\CustomExceptionRepositoryInterface;

class FactoryException
{
    /**
     * @param Throwable $throwable
     * @param CustomExceptionRepositoryInterface $repository
     * @param bool $debug
     * @return CustomExceptionInterface
     */
    public function create(
        Throwable $throwable,
        CustomExceptionRepositoryInterface $repository,
        bool $debug = false
    ): CustomExceptionInterface
    {
        foreach ($repository->getAllExceptions() as $exception => $customException) {
            if ($throwable instanceof $exception) {
                return new $customException($throwable);
            }
        }
        $customException = $repository->getDefaultFatalException($debug);
        return new $customException ($throwable);
    }
}
