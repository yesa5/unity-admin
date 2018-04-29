@extends('layout.layout')
@section('content')
                <!-- /. ROW  -->
                <div class="row text-center pad-top">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                                <i class="fa fa-circle-o-notch fa-5x"></i>
                                <h4>Division</h4>
                            <a href="{{url('/division')}}"><button class="btn-primary">Add</button></a>
                            <a href="{{url('/editDivisions')}}"><button class="btn-success">Edit</button></a>
                        </div>


                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                                <i class="fa fa-trophy fa-5x"></i>
                                <h4>Cup</h4>
                            <a href="{{url('/cup')}}"><button class="btn-primary">Add</button></a>
                            <a href={{url('/editCups')}}><button class="btn-success">Edit</button></a>
                        </div>


                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                                <i class="fa fa-retweet fa-5x"></i>
                                <h4>Tour</h4>
                                <a href="{{url('/tour')}}"><button class="btn-primary">Add</button></a>
                                <a href="{{url('/editTours')}}"><button class="btn-success">Edit</button></a>
                        </div>


                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                                <i class="fa fa-users fa-5x"></i>
                                <h4>Team</h4>
                            <a href="{{url('/team')}}"><button class="btn-primary">Add</button></a>
                            <a href="{{url('/editTeams')}}"><button class="btn-success">Edit</button></a>
                        </div>


                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                                <i class="fa fa-user fa-5x"></i>
                                <h4>Player</h4>
                            <a href="{{url('/player')}}"><button class="btn-primary">Add</button></a>
                            <a href="{{url('/editPlayers')}}"><button class="btn-success">Edit</button></a>
                        </div>


                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                                <i class="fa fa-calendar fa-5x"></i>
                                <h4>Game</h4>
                            <a href="{{url('/game')}}"><button class="btn-primary">Add</button></a>
                            <a href="{{url('/editGames')}}"><button class="btn-success">Edit</button></a>
                        </div>


                    </div>


                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">

                        <div class="div-square">
                            <i class="fa fa-exchange fa-5x"></i>
                            <h4>Transfer</h4>
                            <a href="{{url('/transfer')}}"><button class="btn-primary">Make</button></a>
                        </div>
                    </div>
               </div>
@endsection

