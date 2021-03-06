@extends('layouts.web.app')

@section('content')
<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 probootstrap-animate overlap">
                <form action="/contact/store" method="post" class="probootstrap-form probootstrap-form-box mb60">
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
                        <label for="body">Message</label>
                        <textarea cols="30" rows="10" class="form-control" id="message" name="body"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Message">
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-md-push-1 probootstrap-animate">
                <h4>Contact Details</h4>
                <ul class="with-icon colored">
                    <li><i class="icon-mail"></i><span>contact@exceedbuy.com</span></li>
                    <li><i class="icon-phone2"></i><span>+755 413 5223</span></li>
                </ul>

                <h4>Feedback</h4>
                <p>Here, at ExceedBuy, we design and manufacture thoughtful, affordable & unique products.Great quality, Best choice!</p>
            </div>
        </div>
    </div>
</section>
<!-- END section -->
<div class="container mb50 probootstrap-animate">
    <div id="map"></div>
</div>
@endsection
