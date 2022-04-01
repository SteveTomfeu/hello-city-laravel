@extends('base')
@section('title', 'About Us | '.env('APP_NAME'))

@section('content')
<img src="/img/stevie.jpg" alt="Stevie Pictures">
       <p>Built with &hearts; by Steve Tomfeu Fotsing.</p>
       <p><a href="{{ route('home') }}">Revenir à la page d'accueil</a></p>
       
@endsection
