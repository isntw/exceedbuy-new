<div class="row">
    <div class="col-md-8 mb50">
        <p><img src="{{url($product->images->first()->path)}}" class="img-responsive img-border"
                id="image"></p>
    </div>
    <div class="col-md-4 hidden-sm hidden-xs">
        @foreach($product->images as $image)
        <figure class="col-md-6">
            <img src="{{url($image->path)}}" style="height: 165.781px;"
                 class="img-responsive img-border images probootstrap-animate">
        </figure>
        @endforeach
    </div>
</div>
<div class="row visible-sm visible-xs">
    <div class="col-md-12">
        <ul class="horizontal-slide">
            <li class="col-md-2"><img src="{{url('img/products/ear_muffs/Session-041.jpg')}}"
                                      style="height: 165.781px;"
                                      class="img-responsive img-border images probootstrap-animate"></li>
            <li class="col-md-2"><img src="{{url('img/products/ear_muffs/Session-046.jpg')}}"
                                      style="height: 165.781px;"
                                      class="img-responsive img-border images probootstrap-animate"></li>
            <li class="col-md-2"><img src="{{url('img/products/ear_muffs/Session-049.jpg')}}"
                                      style="height: 165.781px;"
                                      class="img-responsive img-border images probootstrap-animate"></li>
            <li class="col-md-2"><img src="{{url('img/products/ear_muffs/Session-053.jpg')}}"
                                      style="height: 165.781px;"
                                      class="img-responsive img-border images probootstrap-animate"></li>
            <li class="col-md-2"><img src="{{url('img/products/ear_muffs/IMG_0922.jpg')}}"
                                      style="height: 165.781px;"
                                      class="img-responsive img-border images probootstrap-animate"></li>
            <li class="col-md-2"><img src="{{url('img/products/ear_muffs/IMG_0930.jpg')}}"
                                      style="height: 165.781px;"
                                      class="img-responsive img-border images probootstrap-animate"></li>
            <li class="col-md-2"><img src="{{url('img/products/ear_muffs/IMG_0934.jpg')}}"
                                      style="height: 165.781px;"
                                      class="img-responsive img-border images probootstrap-animate"></li>
        </ul>
    </div>
</div>

@push('scripts')
<script>
    function pictureChange(image) {
        document.getElementById("image").src = image;
    }

    $(".images").click(function () {
        image = $(this).attr("src");
        pictureChange(image);
    });

</script>
@endpush