<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Request;
//use illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;
use App\Exceptions\CustomeException;
use App\Exceptions\MyCustomException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    protected $dontReport = [
        MyCustomException::class,
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        // $this->renderable(function (CustomeException $e) {
        //     return response()->json([
        //         'message' => $e->getMessage(),
        //     ], $e->getCode());
        // });

        $this->renderable(function(NotFoundHttpException $e) {
            //return response()->error('Object not found', 404);
            return response()->json([
                'success' => false,
                'error' => 'Object not found',
            ], status:404);
        });
    }

		public function render($request , Throwable $exception)
		{
			if($this->isHttpException($exception))
			{
				return response()->view('errors.404');
			}else{
				return response()->view('errors.402');
			}
		}
}
