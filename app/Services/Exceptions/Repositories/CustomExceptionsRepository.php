<?php

namespace App\Services\Exceptions\Repositories;

use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Services\Exceptions\CustomExceptions\CustomValidationException;
use App\Services\Exceptions\CustomExceptions\CustomModelNotFoundException;
use App\Services\Exceptions\CustomExceptions\ProductionCustomFatalException;
use App\Services\Exceptions\CustomExceptions\DevelopmentCustomFatalException;

class CustomExceptionsRepository implements CustomExceptionRepositoryInterface
{
    /**
     * @return array
     */
    public function getAllExceptions(): array
    {
        return [
            ValidationException::class => CustomValidationException::class,
            ModelNotFoundException::class => CustomModelNotFoundException::class,
        ];
    }

    /**
     * @param bool $debug
     * @return string
     */
    public function getDefaultFatalException(bool $debug): string
    {
        if ($debug) {
            return DevelopmentCustomFatalException::class;
        }

        return ProductionCustomFatalException::class;
    }
}
