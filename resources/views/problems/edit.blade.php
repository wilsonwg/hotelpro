@extends('master')

@section('content')
<div class="container-fluid">

    <H1>問題回報</H1>

    {!! Form::model($problem, ['url' => '/problems/'.$problem->id, 'method'=> 'PATCH' ]) !!}


    <div class="input-group"><div class="input-group-addon">Date Created:</div><input type="text" class="form-control" placeholder="{{ $problem->created_at }}" readonly> </div>

    <br>
    <div class="input-group"><div class="input-group-addon">Date Modified:</div><input type="text" class="form-control" placeholder="{{ $problem->updated_at }}" readonly> </div>
    <br>


    @include('problems._form')

    {!! Form::close() !!}

    {!! delete_form(['problems.destroy', $problem->id]) !!}


</div>


@stop