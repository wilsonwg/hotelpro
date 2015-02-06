@extends('master')

@section('content')
<div class="container-fluid">


    <H1>客訴回報</H1>

    {!! Form::open(['route' => 'complains.store']) !!}


    @include('complains._form')

    {!! Form::close() !!}

</div>

@stop