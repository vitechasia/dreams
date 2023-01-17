<?php

namespace Vdes\Dreams;

use Illuminate\Support\ServiceProvider;


class DreamsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Dream::class, function () {
            return new Dream();
        });
        $this->app->make(AuthController::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        require  __DIR__ . '/routes.php';
        $this->loadViewsFrom(__DIR__ . '/Views', 'dreams');
        $this->publishes([
            __DIR__ . '/Views'   => resource_path('views/template/dreams'),
        ], 'view');
        $this->publishes([
            __DIR__ . '/Views/modul'   => resource_path('views/template/dreams/modul'),
        ], 'view');
        $this->publishes([
            __DIR__.'/UserController.php' => app_path('Http/Controllers/Admin/UserController.php'),
        ]);
        $this->publishes([
            __DIR__.'/../assets' => public_path('assets'),
        ]);
        $this->publishes([
            __DIR__.'/../lang' => lang_path(),
        ]);
    }
}
