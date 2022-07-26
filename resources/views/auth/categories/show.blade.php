@extends('auth.layouts.master')

@section('title', 'Категория ' . $category->name)

@section('content')
    <div>
        <h2>Категория {{ $category->name }}</h2>
        <table>
            <tbody>
            <tr>
                <th>Поле</th>
                <th>{{ $category->id }}</th>
            </tr>
            <tr>
                <td>Код</td>
                <td>{{ $category->code }}</td>
            </tr>
            <tr>
                <td>Название</td>
                <td>{{ $category->name }}</td>
            </tr>
            <tr>
                <td>Описание</td>
                <td>{{ $category->description }}</td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td>
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($category->image) }}" width="150">
                </td>
            </tr>
            <tr>
                <td>Количество товаров</td>
                <td>{{ $category->products->count() }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
