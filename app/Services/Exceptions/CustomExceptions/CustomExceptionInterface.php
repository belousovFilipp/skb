<?php

namespace App\Services\Exceptions\CustomExceptions;

interface CustomExceptionInterface
{
    /**
     * @return int
     */
    public function code(): int;

    /**
     * @return mixed
     */
    public function errors();
}
