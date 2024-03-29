@extends('layouts.master')

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
            @foreach($order->products()->with('category')->get() as $product)
                <tr>
                    <td class="td-basket">
                        <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($product->image) }}" width="150">
                            {{ $product->name }}
                        </a>
                    </td>
                    <td>
                        <div class="form-inline">
                            <span>{{ $product->pivot->count }}</span>
                            <form action="{{ route('basket-add', $product) }}" method="POST">
                                <button type="submit"> +</button>
                                @csrf
                            </form>
                            <form action="{{ route('basket-remove', $product) }}" method="POST">
                                <button type="submit"> -</button>
                                @csrf
                            </form>
                        </div>
                    </td>
                    <td> {{ $product->price }}</td>
                    <td> {{ $product->getPriceForCount() }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3">Общая стоимость:</td>
                <td>{{ $order->getFullSum() }}</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div>
            <a type="button" href="{{ route('basket-place') }}">Оформить заказ</a>
        </div>
    </div>
@endsection
