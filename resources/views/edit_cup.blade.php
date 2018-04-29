@extends('layout.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-5">
            <form method="POST" action="{{route("processEditCup",$cup->id)}}">
                {{ csrf_field() }}
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Edit cup</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" value="{{$cup->name}}" required>
                </div>
                <button type="submit" id="submit" name="submit" class="btn btn-success pull-right">Edit</button>
            </form>
        </div>
    </div>
@endsection