@extends('auth.layouts.master')

@section('title', 'Категории')

@section('content')
    <div>
        <h2>Товары</h2>
        <table>
            <tbody>
            <tr>
                <th>#</th>
                <th>Код</th>
                <th>Название</th>
                <th>Категория</th>
                <th>Цена</th>
                <th>Действие</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <div>
                            <form action="{{ route('products.destroy', $product) }}" method="POST">
                                <a type="button" href="{{ route('products.show' , $product) }}">Открыть</a>
                                <a type="button" href="{{ route('products.edit' , $product) }}">Редактировать</a>
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Удалить">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a type="button" href="{{ route('products.create') }}">Добавить товар</a>
    </div>
@endsection
