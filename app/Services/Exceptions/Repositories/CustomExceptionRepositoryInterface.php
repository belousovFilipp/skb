<?php

namespace App\Services\Exceptions\Repositories;

interface CustomExceptionRepositoryInterface
{
    /**
     * @return array
     */
    public function getAllExceptions(): array;

    /**
     * @param bool $debug
     * @return string
     */
    public function getDefaultFatalException(bool $debug): string;
}
