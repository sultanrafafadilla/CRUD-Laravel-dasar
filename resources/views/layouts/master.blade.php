<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/master.css">
   
</head>
<body>
 <header>
    <nav>
    <a href="#">Home</a>
    <a href="/blog">Blog</a>
    </nav>
 </header>   

    @yield('content')

<footer>
    <p>
        &copy; Sultan 2019
    </p>
</footer>

<script src="/js/main.js"></script>

</body>
</html>