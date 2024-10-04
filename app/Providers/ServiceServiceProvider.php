<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    protected $services = [
        \App\Services\Contracts\ProductServiceInterface::class => \App\Services\Web\ProductService::class,
        \App\Services\Contracts\AuthAdminServiceInterface::class => \App\Services\Web\AuthAdminService::class,
        \App\Services\Contracts\ExampleServiceInterface::class => \App\Services\Web\ExampleService::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register() {}

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        foreach ($this->services as $interface => $class) {
            $this->app->singleton($interface, $class);
        }
    }
}
