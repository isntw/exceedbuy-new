@extends('layouts.web.app')

@section('content')
  <section class="probootstrap-slider flexslider">
    <ul class="slides">
      <li style="background-image: url(img/slider_1.jpg);" class="overlay2">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                <h2>Products</h2>
                <p>Our products.</p>
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
        <div class="col-md-12 text-center section-heading probootstrap-animate">
          <h2>Check our products.</h2>
        </div>
      </div>
      <div class="row">

        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card with-hover">
            <div class="probootstrap-card-media">
              <a href="products/ear"><img src="{{url('img/product_1.png')}}" class="img-responsive img-border"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Ear Defender</h2>
              <p class="category">Babies</p>
              <p><a href="products/ear">View details</a></p>
            </div>
          </div>
        </div>
       

      </div>
    </div>
  </section>
  <!-- END section -->

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

  <!-- END section -->
  

@endsection