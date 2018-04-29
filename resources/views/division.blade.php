@extends('layout.layout')
@section('content')
    <div class="d-flex justify-content-center">
    <div class="col-md-5">
        <div class="form-area">
            <form method="POST" action="{{route("processAddDivision")}}">
                {{ csrf_field() }}
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Add division</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection