<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> @yield('title') </title>
    <meta name="description" content="description">
    <meta name="keywords" content="keywords">
    {{--    <link href="/css/normalize.css" rel="stylesheet">--}}
    <link href="/css/style.css" rel="stylesheet">
    {{--    <script src="/js/methods_v1.js"></script>--}}
    {{--    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>--}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav>
    <a href="{{route('index')}}">Все товары</a>
    <a href="{{route('categories')}}">Категории</a>
    <a href="{{route('basket')}}">В корзину</a>
</nav>

<div>
    @yield('content')
</div>

</body>
</html>
