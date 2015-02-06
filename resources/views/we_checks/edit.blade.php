@extends('master')

@section('content')
<div class="container-fluid">

    <div class="panel panel-default">
<div class="panel-heading">
        <h3 class="panel-title"> {{ $we_check->room_no }} 客房水電問題記錄</h3>

</div>
<div class="panel-body">

    {!! Form::model($we_check, ['url' => '/we_checks/'.$we_check->id, 'method'=> 'PATCH' ]) !!}


    <div class="input-group"><div class="input-group-addon">Date Created:</div><input type="text" class="form-control" placeholder="{{ $we_check->created_at }}" readonly> </div>

    <br>
    <div class="input-group"><div class="input-group-addon">Date Modified:</div><input type="text" class="form-control" placeholder="{{ $we_check->updated_at }}" readonly> </div>
    <br>


    @include('we_checks._form')

    {!! Form::close() !!}

    {!! delete_form(['we_checks.destroy', $we_check->id]) !!}

</div>
</div>
    </div>

@stop