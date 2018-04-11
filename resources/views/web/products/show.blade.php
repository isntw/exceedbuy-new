@extends('layouts.web.app')

@section('content')
<section class="probootstrap-section">
    <div class="container">
        @include('web.products.components.images')
        <div class="row">
            <div class="col-md-12 col-sm-12 mb50" id="startDiv">
                <h2>{{$product->name}}</h2>
                <br>
                <h3 class="text-danger">
                    <small>Price:</small>
                    ${{$product->price}}
                </h3>
                <br>

                <p><a href="{{$product->amazon}}" target="_blank" role="button"
                      class="btn btn-primary btn-sm">Shop Now On Amazon!</a></p>
                <br>
                @foreach($product->description as $e)
                <h4>{{$e->title}}</h4>
                <p>{{$e->content}}</p>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
@push('style')
<style>

    ul.horizontal-slide {
        margin: 0;
        padding: 0;
        width: 100%;
        white-space: nowrap;
        overflow-x: auto;
    }

    ul.horizontal-slide li[class*="col"] {
        display: inline-block;
        float: none;
    }

    ul.horizontal-slide li[class*="col"]:first-child {
        margin-left: 0;
    }

    .flexslider {
        height: 450px;
    }

    #button {
        margin-top: 50px !important;
    }
</style>
@endpush