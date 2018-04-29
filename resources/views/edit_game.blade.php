@extends('layout.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-5">
            <form method="POST" action="{{route("processEditGame",$game->id)}}">
                {{ csrf_field() }}
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Edit game</h3>
                <div class="form-control h-25">
                    <input id="date" name="date" type="date" value="{{$game->date}}">
                </div>
                <div class="form-control">
                    <select name="category1">
                        @foreach($teams as $team)
                            <option value="{{$team->id}}"> {{$team->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-control">
                    <select name="category2">
                        @foreach($teams as $team)
                            <option value="{{$team->id}}"> {{$team->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-control">
                    <select name="category2">
                        @foreach($tours as $tour)
                            <option value="{{$tour->id}}"> {{$tour->number}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-control">
                    <select name="status">
                        <option value="past"> Was played</option>
                        <option value="will"> Will play</option>
                    </select>
                </div>
                <button type="submit" id="submit" name="submit" class="btn btn-success pull-right">Edit</button>
            </form>
        </div>
    </div>
@endsection