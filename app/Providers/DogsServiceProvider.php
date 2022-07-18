<?php

namespace App\Providers;

use App\Services\Dogs\Bulldog;
use App\Services\Dogs\Dog;
use App\Services\Dogs\Kolli;
use Illuminate\Support\ServiceProvider;

class DogsServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public array $bindings = [
//        Dog::class => Kolli::class,
        Dog::class => Bulldog::class,
    ];

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
