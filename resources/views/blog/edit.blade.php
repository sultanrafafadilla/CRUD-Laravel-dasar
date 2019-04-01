@extends('layouts.master')

@section('title', 'Rafs Title')

@section('content')

    <h1>Ini File Edit Blade Php</h1>

    <form action="/blog/{{$blog->id}}" method="post">
        <input type="text" name="title" value="{{ $blog->title}}"> <br>
        <textarea name="description" id="" cols="30" rows="10"> {{ $blog->description}} </textarea> <br>

        <input type="submit" name="submit" value="edit">

        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT"> 
    </form>

@endsection

