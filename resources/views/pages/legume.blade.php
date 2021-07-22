@extends('layouts.index')

@section('content')

@foreach ($legumes as $legume)
<p>{{ $legume->id }}</p>
<h1 class="{{ strlen($legume->name) >= 5 ? 'bg-primary' : '' }}">{{ $legume->name }}</h1>
<p> {{ $legume->quantity }}</p>

@endforeach
@endsection
