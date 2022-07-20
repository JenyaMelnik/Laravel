@extends('master')

@section('title', 'корзина')

@section('content')
    <div>
        <h2>КОРЗИНА</h2>
        <table>
            <thead>
            <tr>
                <th>Название</th>
                <th>Количество</th>
                <th>Цена</th>
                <th>Стоимость</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->products as $product)
                <tr>
                    <td>
                        <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                            {{ $product->name }}
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('basket-add', $product) }}" method="POST">
                            <button type="submit"> + </button>
                            @csrf
                        </form>
                    </td>
                    <td> {{ $product->price }}</td>
                    <td> {{ $product->price }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
