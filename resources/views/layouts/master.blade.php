<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>App name - @yield('title')</title>
  </head>
  <body>
      @section('sidebar')
        Esta é a master sidebar
      @show

      <div class="container">
        @yield('content')

      </div>
  </body>
</html>
