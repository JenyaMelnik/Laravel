@extends('auth.layouts.master')

@isset($product)
    @section('title', 'Редактировать категорию ' . $product->name)
@else
    @section('title', 'Создать категорию')
@endisset

@section('content')
    @isset($product)
        <h2>Редактировать товар <b>{{ $product->name }}</b></h2>
    @else
        <h2>Добавить товар</h2>
    @endisset
    <form method="POST" enctype="multipart/form-data"
          @isset($product)
          action="{{ route('products.update', $product) }}"
          @else
          action="{{ route('products.store') }}">
        @endisset
        <div>
            @isset($product)
                @method('PUT')
            @endisset
            @csrf
            <div>
                <label for=" code">Код: </label>
                <div>
                    <input type="text" name="code"
                           value="@isset ($product){{ $product->code }} @endisset">
                </div>
            </div>
            <br>
            <div>
                <label for="name">Название: </label>
                <div>
                    <input type="text" name="name"
                           value="@isset ($product){{ $product->name }} @endisset">
                </div>
            </div>
            <br>
            <div>
                <label for="category_id">Категория: </label>
                <div>
                    <input type="text" name="category_id"
                           value="@isset ($product){{ $product->category_id }} @endisset">
                </div>
            </div>
            <br>
            <div>
                <label for="description">Описание: </label>
                <div>
                    <textarea name="description" cols="72"
                              rows="7">@isset ($product){{ $product->description }} @endisset</textarea>
                </div>
            </div>
            <br>
            <div>
                <label for="image">Картинка: </label>
                <div>
                    Загрузить <input type="file" name="image" value="">
                </div>
            </div>
            <br>
            <div>
                <label for="price">Цена: </label>
                <div>
                    <input type="text" name="price" value="@isset ($product){{ $product->price }} @endisset">
                </div>
            </div>
            <br>
            <button>Сохранить</button>
        </div>
    </form>
@endsection
