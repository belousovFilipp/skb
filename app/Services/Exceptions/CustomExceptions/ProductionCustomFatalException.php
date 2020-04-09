<?php

namespace App\Services\Exceptions\CustomExceptions;

class ProductionCustomFatalException extends AbstractCustomException
{
    /**
     * @return int
     */
    public function code(): int
    {
        return 500;
    }

    /**
     * @return array|mixed|string|null
     */
    public function errors()
    {
        return __('apiResponse.fatal-error');
    }
}
