<?php

namespace App\Modules\Contacts\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Route::middleware(['api'])
                ->prefix('contacts')
                ->group(__DIR__ . '/../routes/api.php');
        Route::middleware(['web'])
                ->group(__DIR__ . '/../routes/web.php');
    }
}