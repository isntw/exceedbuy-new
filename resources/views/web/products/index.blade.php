@extends('layouts.web.app')

@section('content')
<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
                <h2>Check our products</h2>
            </div>
        </div>
        <div class="row">
            @each('web.components.product_details', $products, 'product')
        </div>
    </div>
</section>
@endsection