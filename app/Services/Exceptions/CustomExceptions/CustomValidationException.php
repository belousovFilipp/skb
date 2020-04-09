<?php

namespace App\Services\Exceptions\CustomExceptions;

class CustomValidationException extends AbstractCustomException
{
    /**
     * @return int
     */
    public function code(): int
    {
        return (int)$this->exception->status;
    }

    /**
     * @return mixed
     */
    public function errors()
    {
        return $this->exception->errors();
    }
}
