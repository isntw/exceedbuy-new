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
                <form action="/warranty/registration" method="post" class="probootstrap-form probootstrap-form-box mb60">
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

                    <input type="text" value="2012-05-15 21:05" id="datetimepicker">


                    <div class="form-group">
                        <label for="body">Message</label>
                        <textarea cols="30" rows="10" class="form-control" id="message" name="body"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Message">
                    </div>
                </form>
            </div>

        </div>
    </div>
</section> 


<!-- END section -->
<div class="container mb50 probootstrap-animate">
    <div id="map"></div>
</div>

<section class="probootstrap-section probootstrap-section-lighter">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
                <h2>People Says...</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4  probootstrap-animate">
                <div class="probootstrap-testimony">
                    <blockquote>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </blockquote>
                    <div class="author">
                        <img src="img/person_1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Theme by ProBootstrap.com">
                        <div>John Doe <span>Designer at ProBootstrap.com</span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4  probootstrap-animate">
                <div class="probootstrap-testimony">
                    <blockquote>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </blockquote>
                    <div class="author">
                        <img src="img/person_2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Theme by ProBootstrap.com">
                        <div>John Doe <span>Designer at ProBootstrap.com</span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4  probootstrap-animate">
                <div class="probootstrap-testimony">
                    <blockquote>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </blockquote>
                    <div class="author">
                        <img src="img/person_3.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Theme by ProBootstrap.com">
                        <div>John Doe <span>Designer at ProBootstrap.com</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection