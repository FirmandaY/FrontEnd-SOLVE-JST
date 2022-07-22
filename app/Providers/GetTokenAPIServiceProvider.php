<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GetTokenAPIServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        require_once app_path() . '/Helpers/GetTokenAPI/UserToken.php';
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
