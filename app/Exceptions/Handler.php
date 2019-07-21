<?php

namespace App\Exceptions;

use Eslym\ErrorReport\Facades\Reporter;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

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
     * @param Exception $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        try{
            $report_id = Reporter::report($exception);
            Session::put('report_id', $report_id);
        } catch (Exception $e){
            parent::report($exception);
            parent::report($e);
        }
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  Request  $request
     * @param Exception $exception
     * @return Response
     */
    public function render($request, Exception $exception)
    {
        #if($exception->getMessage()==LeClient::TOKEN_EXPIRED_MESSAGE)
        #    return redirect('/dashboard/logout')->with('err','Session timeout. Please login again.');

        #else if ($exception->getMessage()==LeClient::INVALID_CREDENTIALS_MESSAGE)
        #    return redirect('/')->with('err',"Invalid Credentials");

        return parent::render($request, $exception);
    }
}
