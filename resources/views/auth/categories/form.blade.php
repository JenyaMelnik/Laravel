@extends('auth.layouts.master')

@isset($category)
    @section('title', 'Редактировать категорию ' . $category->name)
@else
    @section('title', 'Создать категорию')
@endisset

@section('content')
    @isset($category)
        <h2>Редактировать категорию <b>{{ $category->name }}</b></h2>
    @else
        <h2>Добавить категорию</h2>
    @endisset
    <form method="POST" enctype="multipart/form-data"
          @isset($category)
          action="{{ route('categories.update', $category) }}"
          @else
          action="{{ route('categories.store') }}">
        @endisset
        <div>
            @isset($category)
                @method('PUT')
            @endisset
            @csrf
            <div>
                <label for=" code">Код: </label>
                <div>
                    <input type="text" name="code"
                           value="@isset($category) {{ $category->code }} @endisset">
                </div>
            </div>
            <br>
            <div>
                <label for="name">Название: </label>
                <div>
                    <input type="text" name="name"
                           value="@isset($category) {{ $category->name }} @endisset">
                </div>
            </div>
            <br>
            <div>
                <label for="description">Описание: </label>
                <div>
                    <textarea name="description" cols="72"
                              rows="7">@isset($category) {{ $category->description }} @endisset</textarea>
                </div>
            </div>
            <br>
            <div>
                <label for="image">Картинка: </label>
                <div>
                    Загрузить <input type="file" name="image" value="">
                </div>
            </div>
            <button>Сохранить</button>
        </div>
    </form>
@endsection
