<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => 'http://localhost',

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY', 'SomeRandomString'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Logging Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log settings for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Settings: "single", "daily", "syslog", "errorlog"
    |
    */

    'log' => env('APP_LOG', 'single'),

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Foundation\Providers\ArtisanServiceProvider::CLASSNAME,
        Illuminate\Auth\AuthServiceProvider::CLASSNAME,
        Illuminate\Broadcasting\BroadcastServiceProvider::CLASSNAME,
        Illuminate\Bus\BusServiceProvider::CLASSNAME,
        Illuminate\Cache\CacheServiceProvider::CLASSNAME,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::CLASSNAME,
        Illuminate\Routing\ControllerServiceProvider::CLASSNAME,
        Illuminate\Cookie\CookieServiceProvider::CLASSNAME,
        Illuminate\Database\DatabaseServiceProvider::CLASSNAME,
        Illuminate\Encryption\EncryptionServiceProvider::CLASSNAME,
        Illuminate\Filesystem\FilesystemServiceProvider::CLASSNAME,
        Illuminate\Foundation\Providers\FoundationServiceProvider::CLASSNAME,
        Illuminate\Hashing\HashServiceProvider::CLASSNAME,
        Illuminate\Mail\MailServiceProvider::CLASSNAME,
        Illuminate\Pagination\PaginationServiceProvider::CLASSNAME,
        Illuminate\Pipeline\PipelineServiceProvider::CLASSNAME,
        Illuminate\Queue\QueueServiceProvider::CLASSNAME,
        Illuminate\Redis\RedisServiceProvider::CLASSNAME,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::CLASSNAME,
        Illuminate\Session\SessionServiceProvider::CLASSNAME,
        Illuminate\Translation\TranslationServiceProvider::CLASSNAME,
        Illuminate\Validation\ValidationServiceProvider::CLASSNAME,
        Illuminate\View\ViewServiceProvider::CLASSNAME,

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::CLASSNAME,
        App\Providers\AuthServiceProvider::CLASSNAME,
        App\Providers\EventServiceProvider::CLASSNAME,
        App\Providers\RouteServiceProvider::CLASSNAME,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'App'       => Illuminate\Support\Facades\App::CLASSNAME,
        'Artisan'   => Illuminate\Support\Facades\Artisan::CLASSNAME,
        'Auth'      => Illuminate\Support\Facades\Auth::CLASSNAME,
        'Blade'     => Illuminate\Support\Facades\Blade::CLASSNAME,
        'Bus'       => Illuminate\Support\Facades\Bus::CLASSNAME,
        'Cache'     => Illuminate\Support\Facades\Cache::CLASSNAME,
        'Config'    => Illuminate\Support\Facades\Config::CLASSNAME,
        'Cookie'    => Illuminate\Support\Facades\Cookie::CLASSNAME,
        'Crypt'     => Illuminate\Support\Facades\Crypt::CLASSNAME,
        'DB'        => Illuminate\Support\Facades\DB::CLASSNAME,
        'Eloquent'  => Illuminate\Database\Eloquent\Model::CLASSNAME,
        'Event'     => Illuminate\Support\Facades\Event::CLASSNAME,
        'File'      => Illuminate\Support\Facades\File::CLASSNAME,
        'Gate'      => Illuminate\Support\Facades\Gate::CLASSNAME,
        'Hash'      => Illuminate\Support\Facades\Hash::CLASSNAME,
        'Input'     => Illuminate\Support\Facades\Input::CLASSNAME,
        'Lang'      => Illuminate\Support\Facades\Lang::CLASSNAME,
        'Log'       => Illuminate\Support\Facades\Log::CLASSNAME,
        'Mail'      => Illuminate\Support\Facades\Mail::CLASSNAME,
        'Password'  => Illuminate\Support\Facades\Password::CLASSNAME,
        'Queue'     => Illuminate\Support\Facades\Queue::CLASSNAME,
        'Redirect'  => Illuminate\Support\Facades\Redirect::CLASSNAME,
        'Redis'     => Illuminate\Support\Facades\Redis::CLASSNAME,
        'Request'   => Illuminate\Support\Facades\Request::CLASSNAME,
        'Response'  => Illuminate\Support\Facades\Response::CLASSNAME,
        'Route'     => Illuminate\Support\Facades\Route::CLASSNAME,
        'Schema'    => Illuminate\Support\Facades\Schema::CLASSNAME,
        'Session'   => Illuminate\Support\Facades\Session::CLASSNAME,
        'Storage'   => Illuminate\Support\Facades\Storage::CLASSNAME,
        'URL'       => Illuminate\Support\Facades\URL::CLASSNAME,
        'Validator' => Illuminate\Support\Facades\Validator::CLASSNAME,
        'View'      => Illuminate\Support\Facades\View::CLASSNAME,

    ],

];
