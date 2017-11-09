@extends('layouts.web.app')

@section('content')
<section class="probootstrap-slider flexslider">
    <ul class="slides">
        <li style="background-image: url(img/slider_1.jpg);" class="overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                            <h2>Warranty Registration</h2>
                            <p>Please enter your details</p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</section>
<!-- END: slider  -->

<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 probootstrap-animate overlap">
                <form action="/warranty/store" method="post" class="probootstrap-form probootstrap-form-box mb60">
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="text" class="form-control" id="datetimepicker" name="date">
                    </div>
                    <div class="form-group">
                        <label for="body">Message</label>
                        <textarea cols="30" rows="10" class="form-control" id="message" name="body"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Register">
                    </div>
                </form>
            </div>

        </div>
    </div>
</section> 
@endsection