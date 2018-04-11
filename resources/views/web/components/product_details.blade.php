<div class="col-md-4 probootstrap-animate">
    <div class="probootstrap-card with-hover">
        <div class="probootstrap-card-media">
            <a href="{{route('web.product.show', $product->id)}}"><img src="{{url($product->images->first()->path)}}" class="img-responsive img-border"></a>
        </div>
        <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading mb0">{{$product->name}}</h2>
            <p class="category">{{$product->summary}}</p>
            <p><a href="{{route('web.product.show', $product->id)}}">View details</a></p>
        </div>
    </div>
</div>
