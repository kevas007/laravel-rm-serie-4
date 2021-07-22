
@extends('layouts.index')
@section('content')
    <section>
        <div class="container">
            <h1>{{$show->id}}</h1>
            <h1>{{$show->name}}</h1>
            <h1>{{$show->quantity}}</h1>
            <a class="btn btn-success text-white" href="/fruit/{{$show->id}}/edit">EDIT</a>
        </div>
    </section>
@endsection
