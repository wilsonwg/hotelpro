@extends('master')

@section('content')
<div class="container-fluid">

    <div class="panel panel-default">
<div class="panel-heading">
        <h3 class="panel-title"> {{ $q_check->room_no }} 客房問題記錄</h3>

</div>
<div class="panel-body">

    {!! Form::model($q_check, ['url' => '/q_checks/'.$q_check->id, 'method'=> 'PATCH' ]) !!}


    <div class="input-group"><div class="input-group-addon">Date Created:</div><input type="text" class="form-control" placeholder="{{ $q_check->created_at }}" readonly> </div>

    <br>
    <div class="input-group"><div class="input-group-addon">Date Modified:</div><input type="text" class="form-control" placeholder="{{ $q_check->updated_at }}" readonly> </div>
    <br>


    @include('q_checks._form')

    {!! Form::close() !!}

    {!! delete_form(['q_checks.destroy', $q_check->id]) !!}

</div>
</div>
    </div>

@stop