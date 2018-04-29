@extends('layout.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-5">
                @foreach($divisions as $division)
                    <div class="border-dark">
                        <p class="text-dark">{{$division->name}}</p>
                        <a href="{{route("processDeleteDivision",$division->id)}}">
                            <button class="btn-danger">Delete</button>
                        </a>
                    </div>
                @endforeach
        </div>
    </div>
@endsection