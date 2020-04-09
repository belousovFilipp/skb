<?php

namespace App\Services\Exceptions\CustomExceptions;

class CustomModelNotFoundException extends AbstractCustomException
{
    /**
     * @return int
     */
    public function code(): int
    {
        return 404;
    }

    /**
     * @return mixed|string
     */
    public function errors()
    {
        return $this->exception->getMessage();
    }
}
