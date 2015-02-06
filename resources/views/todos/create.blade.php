@extends('master')

@section('content')
<div class="container-fluid">


    <H1>待辦事項</H1>

    {!! Form::open(['route' => 'todos.store']) !!}


    @include('todos._form')

    {!! Form::close() !!}

</div>

@stop