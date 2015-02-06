<div class="form-group {{ $errors->has('work_id')? 'has-error': '' }}">
    Work Category:&nbsp;
    {!!  Form::select('work_id', $works)  !!}
</div>

{!! Form::label('Problem Description', null) !!}
<div class="form-group {{ $errors->has('notes')? 'has-error': '' }}">
    {!! Form::textarea('notes', null, ['class' => 'form-control']) !!}
    {!! $errors->first('notes', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('inspector_id')? 'has-error': '' }}">
    Inspector:&nbsp;
    {!!  Form::select('inspector_id', $inspectors)  !!}
</div>

<div class="form-group {{ $errors->has('worker_id')? 'has-error': '' }}">
    Worker:&nbsp;
    {!!  Form::select('worker_id', $inspectors)  !!}
</div>

<div class="form-group {{ $errors->has('closer_id')? 'has-error': '' }}">
    Closer:&nbsp;
    {!!  Form::select('closer_id', $inspectors)  !!}
</div>

<div class="form-group {{ $errors->has('case_status')? 'has-error': '' }}">
    報告狀態: {!! Form::radio('case_status','0')!!} OK {!! Form::radio('case_status','1', 'true')!!} OO
</div>


<div class="form-group">
    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
</div>