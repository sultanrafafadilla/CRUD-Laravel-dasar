@extends('layouts.master')

@section('title', 'Rafs Title')

@section('content')

    <h1>Ini File Single Blade Php</h1>
    <h2> ({{ $blog -> id}}) {{ $blog -> title }} </h2>
    <hr>
    <p>
        {{ $blog -> description}}
    </p> 
    <hr>
    <p>
    Created at {{ $blog -> created_at}} 
    <br>
    Updated at {{ $blog -> updated_at}}
    </p>

@endsection

