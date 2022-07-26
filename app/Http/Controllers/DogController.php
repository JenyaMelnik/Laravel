<?php

namespace App\Http\Controllers;

use App\Services\Dogs\Dog;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class DogController extends Controller
{
    /** @var Dog  */
    private Dog $dog;

    /**
     * @param Dog $dog
     */
    public function __construct(Dog $dog)
    {
        $this->dog = $dog;
    }

    /**
     *
     */
    public function name()
    {
        dump($this->dog->name());
        dump(app(Dog::class));
    }

    /**
     *
     */
    public function age()
    {
        dd($this->dog->age());
    }

    /**
     *
     */
    public function type()
    {
        dd($this->dog->type());
    }
}
