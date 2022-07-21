@extends('layouts.master')

@section('title', 'Заказ')

@section('content')
    <div>
        <h2>Подтвердите заказ:</h2>
        <div>
            <p>Общая стоимость заказа: <b>{{ $order->getFullPrice() }}</b></p>
            <form action="{{ route('basket-confirm') }}" method="POST">
                <div>
                    <p>Укажите свои имя и телефон, чтобы наш менеджер мог с вами связаться: </p>
                    <label for="name"> Имя: </label>
                    <input type="text" name="name" id="name" value="">
                    <br>
                    <label for="phone"> Телефон: </label>
                    <input type="text" name="phone" id="phone" value="">
                    <br>
                    @csrf
                    <input type="submit" value="Подтвердить заказ">
                </div>
            </form>
        </div>
    </div>
@endsection
