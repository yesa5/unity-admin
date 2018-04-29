@extends('layout.layout')
@section('content')
            @foreach($divisions as $division)
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <div class="panel panel-default p-2 m-2">
                    <p class="text-dark">{{$division->name}}</p>
                    <a href="{{route("processEditDivisions",$division->id)}}">
                        <button class="btn-success">Edit</button>
                    </a>
                </div>
            </div>
            @endforeach
@endsection