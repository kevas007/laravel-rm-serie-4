@extends('layouts.index')

@section('content')

@foreach ($legumes as $legume)
<p>{{ $legume->id }}</p>
<h1>{{ $legume->name }}</h1>
<p> {{ $legume->quantity }}</p>

@endforeach
@endsection
