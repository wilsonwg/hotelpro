@extends('master')

@section('content')
<div class="container-fluid">


    <H1>物品借用、移動記錄</H1>
    <p>客人借用物品，或是(椅子、燈)等東西有搬動都請作記錄，謝謝！</p>

    {!! Form::open(['route' => 'rentals.store']) !!}


    @include('rentals._form')

    {!! Form::close() !!}

</div>

@stop