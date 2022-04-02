@extends('base')
@section('title', 'About Us | '.env('APP_NAME'))

@section('content')
       <img src="{{ asset('img/stevie.jpg') }}" alt="Stevie Pictures" height="200" width="200" class="my-12 rounded-full shadow-md h-32">
       <h2 class="mb-5">Built with <span class="text-pink-500">&hearts;</span> by Steve Tomfeu Fotsing.</h2>
       <p><a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accueil</a></p>
       
@endsection
