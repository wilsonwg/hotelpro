@extends('master')

@section('content')
<div class="container-fluid">


    <H1>問題回報</H1>

    {!! Form::open(['route' => 'problems.store']) !!}


    @include('problems._form')

    {!! Form::close() !!}

</div>

@stop