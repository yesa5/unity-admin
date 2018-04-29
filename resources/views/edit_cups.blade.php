@extends('layout.layout')
@section('content')
            @foreach($cups as $cup)
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="panel panel-default p-2 m-2">
                        <p class="text-dark">{{$cup->name}}</p>
                        <a href="{{route("processEditCups",$cup->id)}}">
                            <button class="btn-success">Edit</button>
                        </a>
                    </div>
                </div>
            @endforeach
@endsection