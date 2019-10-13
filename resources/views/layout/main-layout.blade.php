<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>POST</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  </head>
  <body>

    <header>
      <h1>Header</h1>
    </header>


    <div class="box_post">
      @yield("content")
    </div>

    <div class="cont_form">
      @yield("form")
    </div>

    <footer>
      <h2>Footer</h2>
    </footer>

  </body>
</html>
