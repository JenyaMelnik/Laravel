@extends('layouts.master')

@section('title', 'Все категории')

@section('content')
<h2>Categories</h2>

<div>
    @foreach($categories as $category)
        <div>
            <a href="{{route('category',  $category->code)}}">
               <h2>{{$category->name}}</h2>
            </a>
            <p>{{$category->description}}</p>
        </div>
        <hr>
    @endforeach
</div>
@endsection
