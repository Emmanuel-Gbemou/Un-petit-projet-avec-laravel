@extends('Layouts.app')
@section('title',config('app.name'))

        <img src="{{asset('images/image1.jpg')}}" alt="Guinea" class="drapeau" />

@section('content')
    <h1>Hello from GUINEA!</h1>

    <p>It's currently {{date('h:i A')}}</p>
@stop


