
@extends('Layouts.app')
@section('title', 'About Us | '. config('app.name'))

@section('content')
    <img src="{{asset('images/emma.jpg')}}" alt="Emma Author" class="home" />
    <div>Build with <span class="text-pink-500">&hearts;</span>  by EMMANUEL GBEMOU .</div>
    <div><a href="{{ route('app_home')}}">Revenir a la page d'accueil</a></div>
@stop

