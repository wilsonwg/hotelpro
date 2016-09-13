@extends('master')

@section('content')
<div class="container-fluid">

    <H1>物品借用、移動記錄</H1>
    <p>客人借用物品，或是(椅子、燈)等東西有搬動都請作記錄，謝謝！</p>


    {!! Form::model($rental, ['url' => '/rentals/'.$rental->id, 'method'=> 'PATCH' ]) !!}


    <div class="input-group"><div class="input-group-addon">Date Created:</div><input type="text" class="form-control" placeholder="{{ $rental->created_at }}" readonly> </div>

    <br>
    <div class="input-group"><div class="input-group-addon">Date Modified:</div><input type="text" class="form-control" placeholder="{{ $rental->updated_at }}" readonly> </div>
    <br>


    @include('rentals._form')

    {!! Form::close() !!}

    {!! Form::model($rental, ['url' => '/rentals/'.$rental->id, 'method'=> 'Delete' ]) !!}
    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
    {!! Form::close() !!}


</div>


@stop