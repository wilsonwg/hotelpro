<div class="form-group {{ $errors->has('reporter')? 'has-error': '' }}">
    {!! Form::label('回報者', null) !!}
    {!!  Form::select('reporter', array('default' => '請選擇')+$inspectors, null, ['class' => 'form-control'])  !!}
</div>

{!! Form::label('房號', null) !!}
<div class="form-group {{ $errors->has('room_no')? 'has-error': '' }}">
    {!! Form::text('room_no', null, ['class' => 'form-control', 'placeholder' => '房號']) !!}
    {!! $errors->first('room_no', '<span class="help-block">:message</span>') !!}
</div>

{!! Form::label('客人的名字', null) !!}
<div class="form-group {{ $errors->has('guest_name')? 'has-error': '' }}">
    {!! Form::text('guest_name', null, ['class' => 'form-control', 'placeholder' => '客人的名字']) !!}
    {!! $errors->first('guest_name', '<span class="help-block">:message</span>') !!}
</div>

{!! Form::label('冰箱：', null) !!} 透明玻璃冰箱，廚房冰箱，冷凍冰箱
<div class="form-group {{ $errors->has('freezer')? 'has-error': '' }}">
    {!! Form::text('freezer', null, ['class' => 'form-control', 'placeholder' => '請註明是哪個冰箱']) !!}
    {!! $errors->first('freezer', '<span class="help-block">:message</span>') !!}
</div>

{!! Form::label('存放物品', null) !!}
<div class="form-group {{ $errors->has('item')? 'has-error': '' }}">
        {!! Form::textarea('item', null, ['class' => 'form-control', 'placeholder' => '請說明存放物品內容', 'rows' => '5']) !!}
    {!! $errors->first('item', '<span class="help-block">:message</span>') !!}
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