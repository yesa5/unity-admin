@extends('layout.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-5">
            <form method="POST" action="{{route("processEditTour",$tour->id)}}">
                {{ csrf_field() }}
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Edit tour</h3>
                <div class="form-group">
                    <input type="number" class="form-control" id="name" name="name" value="{{$tour->number}}" required>
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