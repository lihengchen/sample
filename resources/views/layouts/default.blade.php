<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','sample')--学习demo</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
   @include('layouts._header')
    <div class="container">
    @yield('content')
     @include('layouts._footer')
    </div>
  </body>
</html>