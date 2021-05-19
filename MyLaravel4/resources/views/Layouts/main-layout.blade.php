<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title></title>
  </head>

  <body>

    <section>
      @include('Components.header')
    </section>

    <section>
      @yield('content')
    </section>

    <section>
      @include('Components.footer')
    </section>
    
  </body>

</html>
