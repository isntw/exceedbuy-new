@extends('layouts.web.app')

@section('content')
<section class="probootstrap-slider flexslider">
    <ul class="slides">
        <li style="background-image: url(img/slider_1.jpg);" class="overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                            <h2>Enter the Competition</h2>
                            <h2><div id="clock"></div></h2>
                            <p>Details</p>
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
            <div class="col-md-12 probootstrap-animate overlap">
                <form action="{{route('web.contest.store')}}" method="post" class="probootstrap-form probootstrap-form-box mb60">
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInRight">
                            <p><img src="img/index_01.jpg"  class="img-responsive"></p>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Enter the contest">
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>
</section>

@push('scripts')
<script src="{{ URL::asset('js/countdown.js')}}"></script>
<script>
$('#clock').countdown('2017/12/10').on('update.countdown', function (event) {
    var $this = $(this).html(event.strftime(''
            + '<span>%-w</span> <small>week%!w</small> '
            + '<span>%-d</span> <small>day%!d</small> '
            + '<span>%H</span> <small>hr </small>'
            + '<span>%M</span> <small>min </small>'
            + '<span>%S</span> <small>sec</small>'));
});
</script>
@endpush
@endsection