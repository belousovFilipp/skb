<?php

namespace App\Exceptions;

use Throwable;
use App\Services\Exceptions\ExceptionService;
use App\Services\ApiResponse\ApiResponseService;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Throwable $exception
     * @return \Illuminate\Http\JsonResponse|\Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if (!in_array('api', $request->route()->computedMiddleware)) {
            return parent::render($request, $exception);
        }

        $exceptionService = app(ExceptionService::class);
        $apiResponseService = app(ApiResponseService::class);
        $exception = $exceptionService->getException($exception);

        return $apiResponseService->errors(
            $exception->errors(),
            $exception->code()
        );
    }
}
