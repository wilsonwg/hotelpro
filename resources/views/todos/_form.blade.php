<div class="form-group {{ $errors->has('reporter')? 'has-error': '' }}">
    {!! Form::label('回報者', null) !!}
    {!!  Form::select('reporter', array('default' => '請選擇')+$inspectors, null, ['class' => 'form-control'])  !!}
</div>

{!! Form::label('待辦事項', null) !!}
<div class="form-group {{ $errors->has('description')? 'has-error': '' }}">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => '請輸入待辦事項', 'rows' => '5']) !!}
    {!! $errors->first('description', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('closer')? 'has-error': '' }}">
    {!! Form::label('結案者', null) !!}
    {!!  Form::select('closer', array('default' => '請選擇')+$inspectors, null, ['class' => 'form-control'])  !!}
</div>


<div class="form-group {{ $errors->has('case_status')? 'has-error': '' }}">
    報告狀態: {!! Form::radio('case_status','0')!!} OK {!! Form::radio('case_status','1', true)!!} OO
</div>

<div class="form-group">
    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
</div>