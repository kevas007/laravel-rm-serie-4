@extends('layouts.index')

@section('content')

@foreach ($fruits as $fruit)
<h1>{{ $fruit->id }}</h1>
<h1 class="{{ strlen($fruit->name) >= 5 ? 'bg-primary' : '' }}">{{ $fruit->name }}</h1>
<p> {{ $fruit->quantity }}</p>

@endforeach
@endsection
