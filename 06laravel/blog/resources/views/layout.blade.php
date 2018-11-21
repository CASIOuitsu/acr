<!doctype html>
<html>
<head>
    <title>@yield('title', 'ACR')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">

    <style>
        .is-complete {
            text-decoration: line-through;
        }
    </style>
</head>

<body style="padding: 40px;">

    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/projects">Projects</a></li>
      <li><a href="/articles">Articles</a></li>
      <li><a href="/contact">Contact</a></li>
      <li><a href="/about">About Us</a></li>
    </ul>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>