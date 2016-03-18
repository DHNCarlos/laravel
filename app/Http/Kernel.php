<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    const CLASSNAME = __CLASS__;
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::CLASSNAME,
        \App\Http\Middleware\EncryptCookies::CLASSNAME,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::CLASSNAME,
        \Illuminate\Session\Middleware\StartSession::CLASSNAME,
        \Illuminate\View\Middleware\ShareErrorsFromSession::CLASSNAME,
        \App\Http\Middleware\VerifyCsrfToken::CLASSNAME,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::CLASSNAME,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::CLASSNAME,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::CLASSNAME,
    ];
}
