@extends('auth.layouts.master')

@section('title', 'Заказ ' . $order->id)

@section('content')
    <div>
        <h2>Заказ №{{ $order->id }}</h2>
        <p>Заказчик: <b>{{ $order->name }}</b></p>
        <p>Телефон: <b>{{ $order->phone }}</b></p>
        <table>
            <thead>
            <tr>
                <th>Название</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th>Стоимость</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->products as $product)
                <tr>
                    <td>
                        <a href="{{ route('product', $product) }}">
                            <img src="{{ Storage::url($product->image) }}">
                            {{ $product->name }}
                        </a>
                    </td>
                    <td></td>
                    <td>{{ $product->price }} грн.</td>
                    <td>{{ $product->getPriceForCount() }} грн.</td>
                </tr>
            @endforeach
            <tr>
                <td>Общая стоимость: </td>
                <td>{{ $order->getFullSum() }} грн.</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
