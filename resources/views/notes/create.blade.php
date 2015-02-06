@extends('master')

@section('content')
<div class="container-fluid">

    <div class="panel panel-default">
<div class="panel-heading">
        <h3 class="panel-title"> {{ $rooms }} 客房問題記錄</h3>

</div>
<div class="panel-body">

    {!! Form::open(['route' => 'notes.store']) !!}

    <div class="form-group">
        {!! Form::hidden('room_no', $rooms, ['class' => 'form-control']) !!}
    </div>

    @include('notes._form')


    {!! Form::close() !!}


</div>
</div>
    </div>

@stop