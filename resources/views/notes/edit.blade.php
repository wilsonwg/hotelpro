@extends('master')

@section('content')
<div class="container-fluid">

    <div class="panel panel-default">
<div class="panel-heading">
        <h3 class="panel-title"> {{ $note->room_no }} 客房問題記錄</h3>

</div>
<div class="panel-body">

    {!! Form::model($note, ['url' => '/notes/'.$note->id, 'method'=> 'PATCH' ]) !!}


    <div class="input-group"><div class="input-group-addon">Date Created:</div><input type="text" class="form-control" placeholder="{{ $note->created_at }}" readonly> </div>

    <br>
    <div class="input-group"><div class="input-group-addon">Date Modified:</div><input type="text" class="form-control" placeholder="{{ $note->updated_at }}" readonly> </div>
    <br>


    @include('notes._form')


    {!! Form::close() !!}

    {!! Form::model($note, ['url' => '/notes/'.$note->id, 'method'=> 'Delete' ]) !!}
    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
    {!! Form::close() !!}

</div>
</div>
    </div>

@stop