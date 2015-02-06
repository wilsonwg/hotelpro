@extends('master')

@section('content')
<div class="container-fluid">

    <div class="panel panel-default">
<div class="panel-heading">
        <h3 class="panel-title"> {{ $d_check->room_no }} 客房問題記錄</h3>

</div>
<div class="panel-body">

    {!! Form::model($d_check, ['url' => '/d_checks/'.$d_check->id, 'method'=> 'PATCH' ]) !!}


    <div class="input-group"><div class="input-group-addon">Date Created:</div><input type="text" class="form-control" placeholder="{{ $d_check->created_at }}" readonly> </div>

    <br>
    <div class="input-group"><div class="input-group-addon">Date Modified:</div><input type="text" class="form-control" placeholder="{{ $d_check->updated_at }}" readonly> </div>
    <br>


    @include('d_checks._form')

    {!! Form::close() !!}

    {!! delete_form(['d_checks.destroy', $d_check->id]) !!}

</div>
</div>
    </div>

@stop