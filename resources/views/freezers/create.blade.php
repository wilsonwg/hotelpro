@extends('master')

@section('content')
<div class="container-fluid">


    <H1>冰箱存放記錄</H1>
    <p>幫客人存放東西前，請先貼上標籤，註明房號或客人大名。</p>

    {!! Form::open(['route' => 'freezers.store']) !!}


    @include('freezers._form')

    {!! Form::close() !!}

</div>

@stop