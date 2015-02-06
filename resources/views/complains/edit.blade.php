@extends('master')

@section('content')
<div class="container-fluid">

    <H1>客訴回報</H1>

    {!! Form::model($complain, ['url' => '/complains/'.$complain->id, 'method'=> 'PATCH' ]) !!}


    <div class="input-group"><div class="input-group-addon">Date Created:</div><input type="text" class="form-control" placeholder="{{ $complain->created_at }}" readonly> </div>

    <br>
    <div class="input-group"><div class="input-group-addon">Date Modified:</div><input type="text" class="form-control" placeholder="{{ $complain->updated_at }}" readonly> </div>
    <br>


    @include('problems._form')

    {!! Form::close() !!}

    {!! delete_form(['complains.destroy', $complain->id]) !!}


</div>


@stop