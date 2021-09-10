<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repository\User\UserRepositoryInterface',
            'App\Repository\User\UserRepository',
        );

        $this->app->bind(
            'App\Repository\Invoice\InvoiceRepositoryInterface',
            'App\Repository\Invoice\InvoiceRepository',
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
