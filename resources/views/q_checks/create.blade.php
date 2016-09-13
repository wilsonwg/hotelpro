@extends('master')

@section('content')
<div class="container-fluid">


    <H1>客房 {{ $room_no }} 快速檢查</H1>

    {!! Form::open(['route' => 'q_checks.store']) !!}

    <div class="form-group">
        {!! Form::hidden('room_no', $room_no, ['class' => 'form-control']) !!}
    </div>

    @include('q_checks._form')

    {!! Form::close() !!}

</div>

@stop