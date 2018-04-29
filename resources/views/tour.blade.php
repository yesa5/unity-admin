@extends('layout.layout')
@section('content')
    <div class="d-flex justify-content-center">
    <div class="col-md-5">
        <div class="form-area">
            <form method="POST" action="{{route("processAddTour")}}">
                {{ csrf_field() }}
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Add tour</h3>
                <div class="form-group">
                    <input type="number" class="form-control" id="name" name="name" placeholder="Number" required>
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