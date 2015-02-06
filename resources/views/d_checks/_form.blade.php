<div class="form-group {{ $errors->has('inspector_id')? 'has-error': '' }}">
    Inspector:&nbsp;
    {!!  Form::select('inspector_id', $inspectors)  !!}
</div>


<div class="form-group {{ $errors->has('room_door')? 'has-error': '' }}">
門房： {!! Form::radio('room_door','0')!!} OK {!! Form::radio('room_door','1')!!} OO
</div>

<div class="form-group {{ $errors->has('room_no_card')? 'has-error': '' }}">
門牌號碼：{!! Form::radio('room_no_card','0')!!} OK {!! Form::radio('room_no_card','1')!!} OO
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

<div class="form-group {{ $errors->has('bed_underside')? 'has-error': '' }}">
床底： {!! Form::radio('bed_underside','0')!!} OK {!! Form::radio('bed_underside','1')!!} OO
</div>

<div class="form-group {{ $errors->has('bedside_cabinet')? 'has-error': '' }}">
床頭櫃： {!! Form::radio('bedside_cabinet','0')!!} OK {!! Form::radio('bedside_cabinet','1')!!} OO
</div>

<div class="form-group {{ $errors->has('trash_bin')? 'has-error': '' }}">
垃圾桶： {!! Form::radio('trash_bin','0')!!} OK {!! Form::radio('trash_bin','1')!!} OO
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

<div class="form-group {{ $errors->has('kettle')? 'has-error': '' }}">
熱水壺： {!! Form::radio('kettle','0')!!} OK {!! Form::radio('kettle','1')!!} OO
</div>

<div class="form-group {{ $errors->has('chair')? 'has-error': '' }}">
椅子、塑膠凳子： {!! Form::radio('chair','0')!!} OK {!! Form::radio('chair','1')!!} OO
</div>

<div class="form-group {{ $errors->has('room_windows')? 'has-error': '' }}">
窗戶： {!! Form::radio('room_windows','0')!!} OK {!! Form::radio('room_windows','1')!!} OO
</div>

<div class="form-group {{ $errors->has('wallpaper')? 'has-error': '' }}">
壁紙： {!! Form::radio('wallpaper','0')!!} OK {!! Form::radio('wallpaper','1')!!} OO
</div>

<div class="form-group {{ $errors->has('floor_spots')? 'has-error': '' }}">
地板汙垢： {!! Form::radio('floor_spots','0')!!} OK {!! Form::radio('floor_spots','1')!!} OO
</div>

<div class="form-group {{ $errors->has('bathroom_windows')? 'has-error': '' }}">
浴室玻璃： {!! Form::radio('bathroom_windows','0')!!} OK {!! Form::radio('bathroom_windows','1')!!} OO
</div>

<div class="form-group {{ $errors->has('bathroom_table')? 'has-error': '' }}">
浴室小桌： {!! Form::radio('bathroom_table','0')!!} OK {!! Form::radio('bathroom_table','1')!!} OO
</div>

<div class="form-group {{ $errors->has('bathroom_wall')? 'has-error': '' }}">
浴室牆壁： {!! Form::radio('bathroom_wall','0')!!} OK {!! Form::radio('bathroom_wall','1')!!} OO
</div>

<div class="form-group {{ $errors->has('bathroom_silicone')? 'has-error': '' }}">
浴室矽膠： {!! Form::radio('bathroom_silicone','0')!!} OK {!! Form::radio('bathroom_silicone','1')!!} OO
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