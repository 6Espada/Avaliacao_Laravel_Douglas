<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>@yield('titulo')</title>
    </head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Prova do Jonas</a>
          <div class="navbar-nav">
          <a class="nav-item nav-link active" href="{{ route('tabelioes') }}">Tabeliões</a>
            <a class="nav-item nav-link" href="{{ route('certidoes') }}">Certidões</a>
            <a class="nav-item nav-link" href="{{ route('contratos') }}">Contratos</a>
          </div>
        </div>
      </nav>
    <body>
