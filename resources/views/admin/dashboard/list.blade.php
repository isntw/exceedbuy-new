@extends('layouts.admin.app')

@section('content')
<div class="panel-body">

    <div class="col-lg-12">
        <form role="form">
            <div class="form-group">

                <label>Lista Email-uri</label>
                <textarea class="form-control" rows="15">{{$string}}</textarea>
            </div>
        </form>
    </div>
</div>
@endsection