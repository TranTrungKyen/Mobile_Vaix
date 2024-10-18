<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    protected $services = [
        \App\Services\Contracts\SaleServiceInterface::class => \App\Services\Web\SaleService::class,
        \App\Services\Contracts\ImageServiceInterface::class => \App\Services\Web\ImageService::class,
        \App\Services\Contracts\ProductDetailServiceInterface::class => \App\Services\Web\ProductDetailService::class,
        \App\Services\Contracts\StorageServiceInterface::class => \App\Services\Web\StorageService::class,
        \App\Services\Contracts\ColorServiceInterface::class => \App\Services\Web\ColorService::class,
        \App\Services\Contracts\CategoryServiceInterface::class => \App\Services\Web\CategoryService::class,
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
