@extends('layout.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-5">
            <div class="form-area">
                <form method="POST" action="{{route("processAddPlayer")}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Add player</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        <input type="text" class="form-control" id="name" name="surname" placeholder="Surname" required>
                        <input type="file" class="form-control h-25" id="name" name="photo" >
                        <select name="category">
                            @foreach($teams as $team)
                                <option value="{{$team->id}}"> {{$team->name}}</option>
                            @endforeach
                        </select>

                        <div>
                            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Disqualificated
                            </a>
                        </div>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <input type="number" name="leftGames" placeholder="Left games" >
                            </div>
                        </div>

                        <input type="number" class="form-control" name="cardsNum" placeholder="Yellow cards" >

                    </div>

                    <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection