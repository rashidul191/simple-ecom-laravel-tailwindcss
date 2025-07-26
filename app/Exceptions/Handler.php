<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\AuthenticationException;

class Handler extends ExceptionHandler
{
    // List of exception types not reported (optional)
    protected $dontReport = [];

    // List of inputs not flashed for validation exceptions (optional)
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function register()
    {
        //
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['message' => $exception->getMessage()], 401);
        }

        foreach ($exception->guards() as $guard) {
            if ($guard === 'admin') {
                return redirect()->route('admin.login');
            }
        }

        return redirect()->route('login');
    }
}
