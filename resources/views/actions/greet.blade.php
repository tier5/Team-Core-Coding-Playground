@extends('layouts.master_layout')

@section('content')
   <div class="centered">
   	<a href="{{ route('home') }}">HOME</a>
    <h1>I Greeted {{ $name === null ? 'you' : $name }}</h1>
   </div>
@endsection