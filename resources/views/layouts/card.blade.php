<div class="item clearfix">
    <div class="thumbnail">
        <div class="labels">
            @if($product->isNew())
                <span class="badge badge-success">Новинка</span>
            @endif

            @if($product->isRecommend())
                <span class="badge badge-warning">Рекомендуем</span>
            @endif

            @if($product->isHit())
                <span class="badge badge-danger">Хит продаж!</span>
            @endif
        </div>
        <img src="{{ \Illuminate\Support\Facades\Storage::url($product->image) }}" height="150">
        <div>
            <b>{{ $product->name }}</b>
            <p>{{ $product->price }}</p>
        </div>
        <div>
            <form action="{{ route('basket-add', $product) }}" method="post">
                <button type="submit" role="button">В корзину</button>
                @csrf
            </form>
        </div>
        <a href="{{ route('product', [isset($category) ? $category->code : $product->category->code, $product->code]) }}">Подробнее</a>
    </div>
</div>
