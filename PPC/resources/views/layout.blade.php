<!doctype html>
<html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>PPCWeb</title>
    </head>
    <body>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class='nav navbar-nav' >
            <li><a href='/'> Índice </a></li>
            <li><a href='/cursos'> Cursos </a></li>
            <li><a href='/disciplinas'> Disciplinas </a></li>
            <li><a href='/professores'> Professores </a></li>
            <li><a href='/avaliacao'> Avaliação de Curso </a></li>
            <li><a href='/reuniao'> Atas de Reunião </a> </li>
            <li><a href='/ensino'> Planos de Ensino </a></li>
          </ul>
        </div>
      </nav>
      <br>
      <br>
      <br>
      <h1 class="text-center">@yield('heading')</h1>

      @yield('content')

    </body>

    <footer>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </footer>

</html>
