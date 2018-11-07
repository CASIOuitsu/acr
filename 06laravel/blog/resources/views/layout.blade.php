<!doctype html>
<html>
<head>
    <title>@yield('title', 'ACR')</title>
</head>

<body>

    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/contact">Contact</a></li>
      <li><a href="/about">About Us</a></li>
    </ul>
    @yield('content')
</body>
</html>