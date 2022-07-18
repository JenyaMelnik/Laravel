<?php

namespace App\Providers;

use App\Services\Dogs\Bulldog;
use App\Services\Dogs\Dog;
use App\Services\Dogs\Kolli;
use Illuminate\Support\ServiceProvider;

class DogsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Dog::class, function ($app) {
//            return new Kolli();
            return new Bulldog();
        });
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
