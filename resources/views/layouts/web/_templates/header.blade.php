<div class="probootstrap-loader"></div>

<header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="/" class="probootstrap-logo"><img src="/img/logo.gif" height="60" alt="Logo"></a>

        <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>
        <ul class="probootstrap-right-nav hidden-xs" id='info'>
            <li><i class="icon-phone"></i>Call Us : +755 413 5223</li>
            <li><i class="icon-mail"></i>Email Us: contact@exceedbuy.com</li>
        </ul>
        <nav role="navigation" class="navbar probootstrap-nav hidden-xs">
            <ul class="probootstrap-main-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="{{route('web.product.ear')}}">Ear Muffs</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
            <ul class="probootstrap-right-nav hidden-xs">
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/WeLoveGorgeousBabies/"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-google-plus"></i></a></li>

            </ul>


            <div class="extra-text visible-xs">
                <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
                <h5>Mail</h5>
                <p>contact@exceedbuy.com</p>
                <h5>Number</h5>
                <p>	+755 413 5223</p>
                <h5>Connect</h5>
                <ul class="social-buttons">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/WeLoveGorgeousBabies/"><i class="icon-facebook2"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<section class="probootstrap-slider flexslider">
    <ul class="slides">
        <li style="background-image: url({{url('img/slide.jpg')}});" class="overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                            <h2>{{ $title or '' }}</h2>
                            <p style="font-size: 20px;">{{ $description or '' }}</p>
                            @if(Route::currentRouteName() == 'web.index' or Route::currentRouteName() == 'web.product.ear')
                                <i class="fa fa-arrow-circle-down fa-4x probootstrap-animate" id='button'
                                   data-animate-effect="fadeIn"></i>
                            @endif
                            @if(Route::currentRouteName() == 'web.contest.index')
                                <h2>
                                    <div id="clock"></div>
                                </h2>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</section>

