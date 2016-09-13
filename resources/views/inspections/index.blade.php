@extends('master')

@section('content')
    <div class="container">



@foreach($questions as $question)

    {{ $question->name }} <p>

@endforeach



    </div>

@stop