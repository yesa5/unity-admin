@extends('layout.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-5">
            <form method="POST" action="{{route("processEditTeam",$team->id)}}">
                {{ csrf_field() }}
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Edit tour</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" value="{{$team->name}}" required>
                    <input type="file" class="form-control h-50" id="name" name="logo" value="{{$team->logo}}" required>
                </div>
                <select name="category">
                    @foreach($cups as $cup)
                        <option value="{{$cup->id}}"> {{$cup->name}}</option>
                    @endforeach
                </select>
                <button type="submit" id="submit" name="submit" class="btn btn-success pull-right">Edit</button>
            </form>
        </div>
    </div>
@endsection