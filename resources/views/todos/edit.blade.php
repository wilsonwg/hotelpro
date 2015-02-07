@extends('master')

@section('content')
<div class="container-fluid">

    <H1>待辦事項</H1>

    {!! Form::model($todo, ['url' => '/todos/'.$todo->id, 'method'=> 'PATCH' ]) !!}


    <div class="input-group"><div class="input-group-addon">Date Created:</div><input type="text" class="form-control" placeholder="{{ $todo->created_at }}" readonly> </div>

    <br>
    <div class="input-group"><div class="input-group-addon">Date Modified:</div><input type="text" class="form-control" placeholder="{{ $todo->updated_at }}" readonly> </div>
    <br>


    @include('todos._form')

    {!! Form::close() !!}

    {!! Form::model($todo, ['url' => '/todos/'.$todo->id, 'method'=> 'Delete' ]) !!}
    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
    {!! Form::close() !!}


</div>


@stop