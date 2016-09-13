{!! Form::label('聯絡人', null) !!}
<div class="form-group {{ $errors->has('name')? 'has-error': '' }}">
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => '請輸入聯絡人']) !!}
    {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
</div>

{!! Form::label('公司', null) !!}
<div class="form-group {{ $errors->has('company')? 'has-error': '' }}">
    {!! Form::text('company', null, ['class' => 'form-control', 'placeholder' => '請輸入公司']) !!}
    {!! $errors->first('company', '<span class="help-block">:message</span>') !!}
</div>

{!! Form::label('電話號碼', null) !!}
<div class="form-group {{ $errors->has('phone_no')? 'has-error': '' }}">
    {!! Form::text('phone_no', null, ['class' => 'form-control', 'placeholder' => '請輸入電話號碼']) !!}
    {!! $errors->first('phone_no', '<span class="help-block">:message</span>') !!}
</div>

{!! Form::label('地址', null) !!}
<div class="form-group {{ $errors->has('address')? 'has-error': '' }}">
    {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => '地址']) !!}
    {!! $errors->first('address', '<span class="help-block">:message</span>') !!}
</div>

{!! Form::label('補充資料', null) !!}
<div class="form-group {{ $errors->has('notes')? 'has-error': '' }}">
    {!! Form::textarea('notes', null, ['class' => 'form-control', 'placeholder' => '補充資料']) !!}
    {!! $errors->first('notes', '<span class="help-block">:message</span>') !!}
</div>

{!! Form::label('關鍵字', null) !!}
<div class="form-group {{ $errors->has('keywords')? 'has-error': '' }}">
    {!! Form::text('keywords', null, ['class' => 'form-control', 'placeholder' => '請輸入關鍵字']) !!}
    {!! $errors->first('keywords', '<span class="help-block">:message</span>') !!}
</div>


<div class="form-group">
    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
</div>