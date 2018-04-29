@extends('layout.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-5">
            <div class="form-area">
                <form method="POST" action="{{route("processMakeTransfer")}}">
                    {{ csrf_field() }}
                    <br style="clear:both">
                    <div class="form-control h-25">
                        <input id="date" name="date" type="date" value="{{ date('Y-m-d') }}">
                    </div>

                    <div class="form-control">
                        <select name="div" id="div" class="division">
                            @foreach($divs as $div)
                                <option value="{{$div->id}}"> {{$div->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-control">
                        <select name="cup" class="cup">
                        </select>
                    </div>

                    <div class="form-control">
                        <select name="team" class="team">
                        </select>
                    </div>

                    <div class="form-control">
                        <select name="player" class="player">
                        </select>
                    </div>

                    <div class="form-control">
                        <select name="divTo" id="div" class="divisionTo">
                            @foreach($divs as $div)
                                <option value="{{$div->id}}"> {{$div->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-control">
                        <select name="cupTo" class="cupTo">
                        </select>
                    </div>

                    <div class="form-control">
                        <select name="teamTo" class="teamTo">
                        </select>
                    </div>

                    <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    $(document).ready(function () {
        $(document).on('change','.division',function (){

            var div = $(this).val();
            var op=" ";
            $.get('/transfers/'+div, function (data) {
                for (var i=0;i<data.length;i++){
                    op+= '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                }
                $(".cup").html(op);
            });
        });

        $(document).on('change','.cup',function (){

            var div = $(this).val();
            var op=" ";
            $.get('/transfersT/'+div, function (data) {
                for (var i=0;i<data.length;i++){
                    op+= '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                }
                $(".team").html(op);
            });
        });

        $(document).on('change','.divisionTo',function (){

            var div = $(this).val();
            var op=" ";
            $.get('/transfers/'+div, function (data) {
                for (var i=0;i<data.length;i++){
                    op+= '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                }
                $(".cupTo").html(op);
            });
        });

        $(document).on('change','.cupTo',function (){

            var div = $(this).val();
            var op=" ";
            $.get('/transfersT/'+div, function (data) {
                for (var i=0;i<data.length;i++){
                    op+= '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                }
                $(".teamTo").html(op);
            });
        });

        $(document).on('change','.team',function (){

            var div = $(this).val();
            var op=" ";
            $.get('/transfersP/'+div, function (data) {
                for (var i=0;i<data.length;i++){
                    op+= '<option value="'+data[i].id+'">'+data[i].name+' '+data[i].surname+'</option>';
                }
                $(".player").html(op);
            });
        });
    });
</script>
    @endsection