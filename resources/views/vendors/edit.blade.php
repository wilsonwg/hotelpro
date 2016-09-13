@extends('master')

@section('content')
<div class="container-fluid">

    <H1>待辦事項</H1>

    {!! Form::model($vendor, ['url' => '/vendors/'.$vendor->id, 'method'=> 'PATCH' ]) !!}

    @include('vendors._form')

    {!! Form::close() !!}

    {!! Form::model($vendor, ['url' => '/vendors/'.$vendor->id, 'method'=> 'Delete' ]) !!}
    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
    {!! Form::close() !!}


</div>


@stop