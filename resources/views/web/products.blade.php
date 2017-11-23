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
            @include('web.products.ear.ear_panel')
        </div>
    </div>
</section>
@endsection