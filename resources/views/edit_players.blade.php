@extends('layout.layout')
@section('content')
            @foreach($players as $player)
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="panel panel-default p-2 m-2">
                        <div class="d-flex">
                            <img src="{{asset('img/'.$player->photo)}}" style="width: 100px; height: 100px">
                            <p class="text-dark">{{$player->name}} {{$player->surname}}</p>
                        </div>
                        <p class="text-dark">{{$teams[$player->team_id]->name}}</p>
                        <a href="{{route("processEditPlayers",$player->id)}}">
                            <button class="btn-success">Edit</button>
                        </a>
                    </div>
                </div>
            @endforeach
@endsection