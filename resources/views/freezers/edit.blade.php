@extends('master')

@section('content')
<div class="container-fluid">

    <H1>冰箱存放記錄</H1>
    <p>幫客人存放東西前，請先貼上標籤，註明房號或客人大名。</p>


    {!! Form::model($freezer, ['url' => '/freezers/'.$freezer->id, 'method'=> 'PATCH' ]) !!}


    <div class="input-group"><div class="input-group-addon">Date Created:</div><input type="text" class="form-control" placeholder="{{ $freezer->created_at }}" readonly> </div>

    <br>
    <div class="input-group"><div class="input-group-addon">Date Modified:</div><input type="text" class="form-control" placeholder="{{ $freezer->updated_at }}" readonly> </div>
    <br>


    @include('freezers._form')

    {!! Form::close() !!}

    {!! Form::model($freezer, ['url' => '/freezers/'.$freezer->id, 'method'=> 'Delete' ]) !!}
    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
    {!! Form::close() !!}


</div>


@stop