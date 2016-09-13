<div class="form-group {{ $errors->has('reporter')? 'has-error': '' }}">
    {!! Form::label('回報者', null) !!}
    {!!  Form::select('reporter', array('default' => '請選擇')+$inspectors, null, ['class' => 'form-control'])  !!}
</div>

{!! Form::label('物品', null) !!}
<div class="form-group {{ $errors->has('item')? 'has-error': '' }}">
    {!! Form::text('item', null, ['class' => 'form-control', 'placeholder' => '物品描述', 'rows' => '5']) !!}
    {!! $errors->first('item', '<span class="help-block">:message</span>') !!}
</div>

{!! Form::label('原本的位置', null) !!}
<div class="form-group {{ $errors->has('original_location')? 'has-error': '' }}">
    {!! Form::text('original_location', null, ['class' => 'form-control', 'placeholder' => '物品原本的位置']) !!}
    {!! $errors->first('original_location', '<span class="help-block">:message</span>') !!}
</div>

{!! Form::label('借用中的位置', null) !!}
<div class="form-group {{ $errors->has('new_location')? 'has-error': '' }}">
    {!! Form::text('new_location', null, ['class' => 'form-control', 'placeholder' => '物品目前的位置']) !!}
    {!! $errors->first('new_location', '<span class="help-block">:message</span>') !!}
</div>

{!! Form::label('數量', null) !!}
<div class="form-group {{ $errors->has('quantity')? 'has-error': '' }}">
    {!! Form::text('quantity', null, ['class' => 'form-control', 'placeholder' => '數量']) !!}
    {!! $errors->first('quantity', '<span class="help-block">:message</span>') !!}
</div>


<div class="form-group {{ $errors->has('closer')? 'has-error': '' }}">
    {!! Form::label('結案者：', null) !!}結案者請確認東西已歸位
    {!!  Form::select('closer', array('default' => '請選擇')+$inspectors, null, ['class' => 'form-control'])  !!}
</div>


<div class="form-group {{ $errors->has('case_status')? 'has-error': '' }}">
    報告狀態: {!! Form::radio('case_status','0')!!} OK {!! Form::radio('case_status','1', true)!!} OO
</div>

<div class="form-group">
    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
</div>