@extends('layouts.master')

@section('title', 'Rafs Title')

@section('content')

    <h1>Ini File Create Blade Php</h1>

    <form action="/blog" method="post">
        <input type="text" name="title" value="{{ old('title') }}"> <br>

    @if($errors->has('title'))
        <p> {{$errors->first('title')}} </p>
    @endif

        <textarea name="description" id="" cols="30" rows="10"> {{ old('description')}} </textarea> <br>

    @if($errors->has('description'))
        <p> {{$errors->first('description')}} </p>
    @endif

        <input type="submit" name="submit" value="Create">

        {{ csrf_field() }}

    </form>

@endsection

