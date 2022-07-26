@extends('auth.layouts.master')

@section('title', 'Категории')

@section('content')
    <div>
        <h2>Категории</h2>
        <table>
            <tbody>
            <tr>
                <th>#</th>
                <th>Код</th>
                <th>Название</th>
                <th>Действие</th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->code }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <div>
                            <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                <a type="button" href="{{ route('categories.show' , $category) }}">Открыть</a>
                                <a type="button" href="{{ route('categories.edit' , $category) }}">Редактировать</a>
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
        <a type="button" href="{{ route('categories.create') }}">Добавить категорию</a>
    </div>
@endsection
