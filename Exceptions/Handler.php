<?php

namespace Modules\Notifier\Exceptions;

use Exception;
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
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        $notifier = config('notifier.enabled');
        if ($notifier && $this->shouldReport($exception)) {
            $this->sendEmail($exception);
        }

        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }

    /**
     * Sends an email upon exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function sendEmail(Exception $exception)
    {
        try {
            $e = \Symfony\Component\Debug\Exception\FlattenException::create($exception);
            $handler = new \Symfony\Component\Debug\ExceptionHandler();
            $html = $handler->getHtml($e);

            \Mail::send(new \Modules\Notifier\Emails\ExceptionOccured($html));

        } catch (Exception $exception) {
            \Illuminate\Support\Facades\Log::error($exception);
        }
    }
}
