@extends('layouts.web.app')

@section('content')
<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 probootstrap-animate overlap" style='margin-top:-410px;'>
                <form action="{{route('web.contest.store')}}" method="post"
                      class="probootstrap-form probootstrap-form-box mb60">
                    <h4 style="margin-bottom:40px;">Enter to win these wonderful baby hearing protection ear
                        muffs.The perfect way to keep your little one's hearing safe.</h4>

                    <div class="row">
                        {{ csrf_field() }}
                        <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInRight">
                            <p><img src="img/colaj/main.jpg" class="img-responsive"></p>
                        </div>
                        <h3><b class='text-danger'>Number of Winners:</b> 3</h3>
                        <h3><b class='text-danger'>Total Prize Value:</b> $39.99</h3>

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
                            <input type="submit" class="btn btn-primary" id="submit" name="submit"
                                   value="Enter the contest">
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
$('#clock').countdown('2018/01/23').on('update.countdown', function (event) {
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