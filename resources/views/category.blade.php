@extends('layouts.master')

@section('title', $category->name)

@section('content')
    <h2> {{ $category->name }} {{$category->products->count()}}</h2>

    <h2> {{ $category->description }} </h2>

    <div class="row">
        @foreach($category->products as $product)
            @include('layouts.card', compact('product'))
        @endforeach
    </div>
@endsection
