@extends('base')


@section('content')
       <img src=" {{ asset('img/cmr.jpg') }}" alt="Cameroun Flag" height="200" width="200" class="mt-12 rounded shadow-md h-32">
       <h1 class=" mt-5 text-3xl sm:text-5xl text-indigo-600  font-semibold">Hello from Cameroon !</h1>
       <p class="text-gray-800 text-lg">It's currently {{ date('h:i A')}}.</p>
@endsection