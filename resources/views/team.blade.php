@extends('layout.layout')
@section('content')
    <div class="d-flex justify-content-center">
    <div class="col-md-5">
        <div class="form-area">
            <form method="post" action="{{route("processAddTeam")}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Add team</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    <input type="file" class="form-control h-50" id="name" name="logo" required>
                </div>
                <select name="category">
                    @foreach($cups as $cup)
                        <option value="{{$cup->id}}"> {{$cup->name}}</option>
                    @endforeach
                </select>
                <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection