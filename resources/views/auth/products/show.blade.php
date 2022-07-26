@extends('auth.layouts.master')

@section('title', 'Товар ' . $product->name)

@section('content')
    <div>
        <h2>Товар: {{ $product->name }}</h2>
        <table>
            <tbody>
            <tr>
                <th>Поле</th>
                <th>Значение</th>
            </tr>
            <tr>
                <td>Код</td>
                <td>{{ $product->code }}</td>
            </tr>
            <tr>
                <td>Название</td>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <td>Описание</td>
                <td>{{ $product->description }}</td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td></td>
            </tr>
            <tr>
                <td>Цена</td>
                <td>{{ $product->price }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
