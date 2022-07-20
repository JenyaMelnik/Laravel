@extends('master')

@section('title', 'главная')

@section('content')

    <h2>Все товары</h2>

    <div class="row">
        @foreach($products as $product)
            @include('card', compact('product'))
        @endforeach
    </div>

@endsection
