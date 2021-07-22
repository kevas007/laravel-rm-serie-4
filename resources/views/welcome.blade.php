@extends('layouts.index')

@section('content')

@foreach ($fruits as $fruit)
<h1>{{ $fruit->id }}</h1>
<h1>{{ $fruit->name }}</h1>
<p> {{ $fruit->quantity }}</p>

@endforeach
@endsection
