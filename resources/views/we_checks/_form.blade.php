<div class="form-group {{ $errors->has('inspector_id')? 'has-error': '' }}">
    Inspector:&nbsp;
    {!!  Form::select('inspector_id', $inspectors)  !!}
</div>

<div class="form-group {{ $errors->has('light')? 'has-error': '' }}">
電燈都亮： {!! Form::radio('light','0')!!} OK {!! Form::radio('light','1')!!} OO
</div>

<div class="form-group {{ $errors->has('lcd')? 'has-error': '' }}">
空調面板正常運作，顯示正常： {!! Form::radio('lcd','0')!!} OK {!! Form::radio('lcd','1')!!} OO
</div>

<div class="form-group {{ $errors->has('tv')? 'has-error': '' }}">
電視顯示正常： {!! Form::radio('tv','0')!!} OK {!! Form::radio('tv','1')!!} OO
</div>

<div class="form-group {{ $errors->has('fridge')? 'has-error': '' }}">
小冰箱無異物： {!! Form::radio('fridge','0')!!} OK {!! Form::radio('fridge','1')!!} OO
</div>

<div class="form-group {{ $errors->has('faucet')? 'has-error': '' }}">
水龍頭有沒有搖晃： {!! Form::radio('faucet','0')!!} OK {!! Form::radio('faucet','1')!!} OO
</div>

<div class="form-group {{ $errors->has('basin')? 'has-error': '' }}">
臉盆有沒有搖晃： {!! Form::radio('basin','0')!!} OK {!! Form::radio('basin','1')!!} OO
</div>

<div class="form-group {{ $errors->has('shower')? 'has-error': '' }}">
蓮蓬頭和軟管是否正常： {!! Form::radio('shower','0')!!} OK {!! Form::radio('shower','1')!!} OO
</div>

<div class="form-group {{ $errors->has('toilet')? 'has-error': '' }}">
馬桶蓋是否正常： {!! Form::radio('toilet','0')!!} OK {!! Form::radio('toilet','1')!!} OO
</div>

{!! Form::label('其他問題', null) !!}
<div class="form-group {{ $errors->has('notes')? 'has-error': '' }}">
    {!! Form::textarea('notes', null, ['class' => 'form-control']) !!}
    {!! $errors->first('notes', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('case_status')? 'has-error': '' }}">
    報告狀態: {!! Form::radio('case_status','0')!!} OK {!! Form::radio('case_status','1')!!} OO
</div>

<div class="form-group">
    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
</div>