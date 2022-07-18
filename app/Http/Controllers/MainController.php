<?php

namespace App\Http\Controllers;

use App\Services\Dogs\Dog;
use App\Services\Dogs\Kolli;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Dog $dog): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
//        $dog = app(Dog::class);
//        dump($dog);
        return view('index');
    }

    public function categories(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('categories');
    }

    public function product(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('product');
    }
}
