@extends('layout.layout')
@section('content')
            @foreach($games as $game)
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <div class="panel panel-default p-2 m-2">
                    <div class="d-flex">
                        <p>{{$game->team1_id}}:</p>
                        <p>{{$game->team2_id}}</p>
                    </div>
                    <p class="text-dark">{{$game->date}}</p>
                    <a href="{{route("processEditGames",$game->id)}}">
                        <button class="btn-success">Edit</button>
                    </a>
                </div>
            </div>
            @endforeach
@endsection