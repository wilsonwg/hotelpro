@extends('master')

@section('content')
<div class="container-fluid">


    <H1>廠商資料</H1>

    {!! Form::open(['route' => 'vendors.store']) !!}


    @include('vendors._form')

    {!! Form::close() !!}

</div>

@stop