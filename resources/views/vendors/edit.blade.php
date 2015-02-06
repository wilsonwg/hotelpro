@extends('master')

@section('content')
<div class="container-fluid">

    <H1>待辦事項</H1>

    {!! Form::model($vendor, ['url' => '/vendors/'.$vendor->id, 'method'=> 'PATCH' ]) !!}

    @include('vendors._form')

    {!! Form::close() !!}

    {!! delete_form(['vendors.destroy', $vendor->id]) !!}


</div>


@stop