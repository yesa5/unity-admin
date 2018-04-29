@extends('layout.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-5">
            <form method="POST" action="{{route("processEditPlayer",$player->id)}}">
                {{ csrf_field() }}
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Edit player</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" value="{{$player->name}}" required>
                    <input type="text" class="form-control" id="name" name="surname" value="{{$player->surname}}" required>
                    <input type="file" class="form-control h-25" id="name" name="photo" value="{{$player->photo}}" >
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
                            <input type="number" name="leftGames" placeholder="Left games" required>
                        </div>
                    </div>

                    <input type="number" class="form-control" name="cardsNum" placeholder="Amount of cards" required>

                </div>

                <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
            </form>
        </div>
    </div>
@endsection