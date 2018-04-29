@extends('layout.layout')
@section('content')
            @foreach($teams as $team)
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="panel panel-default p-2 m-2">
                        <div class="d-flex">
                            <img src="{{asset('img/'.$team->logo)}}" style="width: 100px; height: 100px">
                            <p class="text-dark">{{$team->name}}</p>
                        </div>
                        <a href="{{route("processEditTeams",$team->id)}}">
                            <button class="btn-success">Edit</button>
                        </a>
                    </div>
                </div>
            @endforeach
@endsection