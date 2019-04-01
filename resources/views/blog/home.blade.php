@extends('layouts.master')
<!-- digunakan untuk menghubungkan dan mengambil layout dasar dari views/layouts/master-->

@section('title', 'Rafs Title')

@section('content')
<!-- section adalah metode memberitahu program dimana letak dari isi yaitu 'content' -->

<H1>Selamat datang di blog/home</H1> 
<h2>Testing</h2>
  <!-- adalah isi / content -->

<hr>
  @foreach($blogs as $blog)
     <li>
     
     {{$blog -> id}} <a href="/blog/{{$blog->id}}"> {{ $blog -> title}} </a>

     <form action="/blog/{{$blog->id}}" method="post">
        <input type="submit" name="submit" value="delete">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="Delete"> 
    </form>

     </li> 
  @endforeach

@endsection