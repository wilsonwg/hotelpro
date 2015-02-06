<div class="form-group {{ $errors->has('inspector_id')? 'has-error': '' }}">
    Inspector:&nbsp;
    {!!  Form::select('inspector_id', $inspectors)  !!}
</div>

<div class="form-group {{ $errors->has('hair')? 'has-error': '' }}">
頭髮： {!! Form::radio('hair','0')!!} OK {!! Form::radio('hair','1')!!} OO
</div>

<div class="form-group {{ $errors->has('room_items')? 'has-error': '' }}">
備品齊全： {!! Form::radio('room_items','0')!!} OK {!! Form::radio('room_items','1')!!} OO
</div>

<div class="form-group {{ $errors->has('bed')? 'has-error': '' }}">
床： {!! Form::radio('bed','0')!!} OK {!! Form::radio('bed','1')!!} OO
</div>

<div class="form-group {{ $errors->has('desk')? 'has-error': '' }}">
桌子： {!! Form::radio('desk','0')!!} OK {!! Form::radio('desk','1')!!} OO
</div>

<div class="form-group {{ $errors->has('cabinet')? 'has-error': '' }}">
小木櫃： {!! Form::radio('cabinet','0')!!} OK {!! Form::radio('cabinet','1')!!} OO
</div>

<div class="form-group {{ $errors->has('fridge')? 'has-error': '' }}">
冰箱： {!! Form::radio('fridge','0')!!} OK {!! Form::radio('fridge','1')!!} OO
</div>

<div class="form-group {{ $errors->has('cup')? 'has-error': '' }}">
水杯： {!! Form::radio('cup','0')!!} OK {!! Form::radio('cup','1')!!} OO
</div>

<div class="form-group {{ $errors->has('chair')? 'has-error': '' }}">
椅子、塑膠凳子： {!! Form::radio('chair','0')!!} OK {!! Form::radio('chair','1')!!} OO
</div>

<div class="form-group {{ $errors->has('bathroom_windows')? 'has-error': '' }}">
浴室玻璃： {!! Form::radio('bathroom_windows','0')!!} OK {!! Form::radio('bathroom_windows','1')!!} OO
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