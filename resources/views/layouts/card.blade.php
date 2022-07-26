<div class="item">
    <img src="{{ \Illuminate\Support\Facades\Storage::url($product->image) }}" width="150">
    <div>
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->price }}</p>
    </div>
    <div>
        <form action="{{ route('basket-add', $product) }}" method="post">
            <button type="submit" role="button">В корзину</button>
            @csrf
        </form>
    </div>
    <a href="{{ route('product', [$product->category->code, $product->code]) }}">Подробнее</a>
</div>
