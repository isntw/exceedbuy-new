@extends('layouts.web.app')

@section('content')
<section class="probootstrap-slider flexslider">
    <ul class="slides">
        <li style="background-image: url(img/poza2.jpg);" class="overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                            <h2>Welcome to ExceedBuy</h2>
                            <p style="font-size: 20px;">Quality, a way of life.</p>
                            
                           <i class="fa fa-arrow-circle-down fa-4x probootstrap-animate" id='button' data-animate-effect="fadeIn"></i>
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
        <div class="row overlap">
            <div class="col-md-4">
                <div class="service left-icon probootstrap-animate">

                    <div class="icon">
                        <i class="icon-laptop3"></i>
                    </div>

                    <div class="text collapse" >
                        <h3 class="heading">Why ExceedBuy?</h3>
                        <p>At ExceedBuy.com we have always set <br>out to be the kind of company that we would want to deal with if we were</p>
                        <p><a data-toggle="collapse" data-target="#collapse1" style="cursor: pointer; ">Learn more</a></p>
                        <p id="collapse1" class="collapse">making an online purchase. Consequently, we take security and customer service very seriously and appreciate the trust placed in us by all of our customers when making a purchase. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service left-icon probootstrap-animate" style="height:191px;">
                    <div class="icon">
                        <i class="icon-presentation"></i>
                    </div>
                    <div class="text">
                        <h3 class="heading">Our Products</h3>
                        <p>All our products are carefully selected and of the highest quality and checked before dispatch. We aim to stock the highest quality brands of baby products! </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service left-icon probootstrap-animate">
                    <div class="icon">
                        <i class="icon-wallet2"></i>
                    </div>
                    <div class="text">
                        <h3 class="heading">Store</h3>
                        <p>The ExceedBuy store has one main goal in mind. We aim to offer quality, unique and affordable children's products to parents,</p>
                        <p><a data-toggle="collapse" data-target="#collapse2"  style="cursor: pointer; ">Learn more</a></p>
                        <p id="collapse2" class="collapse"> grandparents, family and friends who will be delighted to purchase (or receive as a gift) one of our products. </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->

<div class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate" id="startDiv">
                <h2>Welcome to ExceedBuy</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInLeft">

                <div class="panel-group probootstrap-panel" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h3 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Premium Quality
                                </a>
                            </h3>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <p>We established ExceedBuy, to offer babies aged 3-36 months PREMIUM QUALITY products, in addictive TRENDY DESIGNS that will make your little treasure shine!</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Our Products 
                                </a>
                            </h3>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>All our products are certified and tested by third-party laboratories.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    SEO
                                </a>
                            </h3>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>ExceedBuy was founded in 2017 by Lucachi Bogdan.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END panel-group -->
            </div>
            <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInRight">
                <p><img src="img/index_01.jpg"  class="img-responsive"></p>
            </div>
        </div>
    </div>
</div>
<!-- END section -->

<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
                <h2>Watch Video</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 probootstrap-animate" data-animate-effect="fadeIn">
                <figure>
                    <div class="probootstrap-video">
                        <a href="https://www.youtube.com/watch?v=YzKvTFdkatw" class="popup-vimeo probootstrap-video-play overlay"><span><i class="icon-play3"></i></span></a>
                        <img src="img/slider_1.jpg" class="img-responsive">
                    </div>
                </figure>
            </div>
        </div>
    </div>
</section>
<!-- END section -->

<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
                <h2>Products</h2>
            </div>
        </div>
        @include('web.products.ear.ear_panel')


    </div>
</div>
</section>
<!-- END section -->
@endsection