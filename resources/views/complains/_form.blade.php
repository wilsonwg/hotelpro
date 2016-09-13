<div class="form-group {{ $errors->has('reporter')? 'has-error': '' }}">
    {!! Form::label('回報者', null) !!}
    {!!  Form::select('reporter', array('default' => '請選擇')+$inspectors, null, ['class' => 'form-control'])  !!}
</div>

{!! Form::label('主題', null) !!}
<div class="form-group {{ $errors->has('title')? 'has-error': '' }}">
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => '請輸入問題主題']) !!}
    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
</div>

{!! Form::label('地點', null) !!}
<div class="form-group {{ $errors->has('location')? 'has-error': '' }}">
    {!! Form::text('location', null, ['class' => 'form-control', 'placeholder' => '請輸入客訴相關地點']) !!}
    {!! $errors->first('location', '<span class="help-block">:message</span>') !!}
</div>

{!! Form::label('客訴說明', null) !!}
<div class="form-group {{ $errors->has('problem')? 'has-error': '' }}">
    {!! Form::textarea('problem', null, ['class' => 'form-control', 'placeholder' => '請輸入問題說明', 'rows' => '5']) !!}
    {!! $errors->first('problem', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('closer')? 'has-error': '' }}">
    {!! Form::label('結案者', null) !!}
    {!!  Form::select('closer', array('default' => '請選擇')+$inspectors, null, ['class' => 'form-control'])  !!}
</div>

{!! Form::label('客訴解答', null) !!}
<div class="form-group {{ $errors->has('answer')? 'has-error': '' }}">
    {!! Form::textarea('answer', null, ['class' => 'form-control', 'placeholder' => '請輸入問題說明', 'rows' => '5']) !!}
    {!! $errors->first('answer', '<span class="help-block">:message</span>') !!}
</div>




<div class="form-group {{ $errors->has('case_status')? 'has-error': '' }}">
    報告狀態: {!! Form::radio('case_status','0')!!} OK {!! Form::radio('case_status','1', true)!!} OO
</div>

<div class="form-group">
    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
</div>