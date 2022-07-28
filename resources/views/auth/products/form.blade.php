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
                    @include('auth.layouts.error', ['fieldName'=>'code'])
                    <input type="text" name="code"
                           value="@isset ($product){{ $product->code }} @endisset">
                </div>
            </div>
            <br>
            <div>
                <label for="name">Название: </label>
                <div>
                    @include('auth.layouts.error', ['fieldName'=>'name'])
                    <input type="text" name="name"
                           value="@isset ($product){{ $product->name }} @endisset">
                </div>
            </div>
            <br>
            <div>
                <label for="category_id">Категория: </label>
                <div>
                    @include('auth.layouts.error', ['fieldName'=>'category_id'])
                    <select name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                    @isset($product)
                                    @if($product->category_id == $category->id)
                                    selected
                                @endif
                                @endisset
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div>
                <label for="description">Описание: </label>
                <div>
                    @include('auth.layouts.error', ['fieldName'=>'description'])
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
                    @include('auth.layouts.error', ['fieldName'=>'price'])
                    <input type="text" name="price" value="@isset ($product){{ $product->price }} @endisset">
                </div>
            </div>
            <br>
            @foreach([
            'hit' => 'Хит',
            'new' => 'Новинка',
            'recommend' => 'Рекомендуемые',
            ] as $field => $title)
                <div>
                    <label for="code">{{ $title }}: </label>
                    <div>
                        <input type="checkbox" name="{{ $field }}"
                               @if(isset($product) && $product->$field === 1)
                               checked="checked"
                            @endif
                        >
                    </div>
                </div>
                <br>
            @endforeach
            <button>Сохранить</button>
        </div>
    </form>
@endsection
