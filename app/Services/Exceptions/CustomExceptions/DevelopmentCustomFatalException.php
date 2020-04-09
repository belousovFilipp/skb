<?php

namespace App\Services\Exceptions\CustomExceptions;

class DevelopmentCustomFatalException extends AbstractCustomException
{
    /**
     * @return int
     */
    public function code(): int
    {
        return 500;
    }

    /**
     * @return array|mixed
     */
    public function errors()
    {
        return [
            get_class($this->exception),
            $this->exception->getMessage(),
            $this->exception->getFile(),
            'line '.$this->exception->getLine(),
        ];
    }
}
