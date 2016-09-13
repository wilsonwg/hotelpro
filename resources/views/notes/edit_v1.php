@extends('master')

@section('content')
<div class="container-fluid">

    <div class="panel panel-default">
<div class="panel-heading">
        <h3 class="panel-title"> {{ $room_notes->room_no }} 客房問題記錄</h3>
</div>
<div class="panel-body">

<!-- Form model binding -->
{!! Form::model($room_notes, ['url' => 'room_notes/'.$room_notes->id, 'method'=>'PATCH']) !!}

<div class="input-group"><div class="input-group-addon">Date Created:</div><input type="text" class="form-control" placeholder="{{ $room_notes->date_created }}" readonly> </div>

<br>
    <div class="input-group"><div class="input-group-addon">Date Modified:</div><input type="text" class="form-control" placeholder="{{ $room_notes->date_modified }}" readonly> </div>
<br>

{!! Form::label('Problem Description', null) !!}
    <div class="form-group">
{!! Form::textarea('notes', null, ['class' => 'form-control']) !!}
    </div>


    <div class="form-group">
    Inspector:&nbsp;
{!!  Form::select('inspector_id', $inspectors, $room_notes->inspector_id)  !!}



    </div>

    <div class="form-group">
報告狀態: {!! Form::radio('case_status','0')!!} OK {!! Form::radio('case_status','1')!!} OO
    </div>


    <div class="form-group">
{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}
</div>
</div>
    </div>

@stop