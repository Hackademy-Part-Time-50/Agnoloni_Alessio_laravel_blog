<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Articoli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>

  
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{'/'}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{'/articoli'}}">Articoli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{'/contatti'}}">Contatti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{'/chi-siamo'}}">Chi Siamo</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <h1>Articoli</h1>


  @if(! $lista_articoli)
      <h3>Nessun articolo disponibile</h3>
  @else
    @foreach($lista_articoli as $articolo)
      @if($articolo['visible'])
        <div class="mb-3 shadow-sm p-3 rounded">
          <h3>{{ $articolo['title'] }}</h3>
          <h6>{{ $articolo['category'] }}</h6>
          <a href="{{route('articolo',$articolo['id'])}}">Leggi tutto</a>
        </div>
      @endif
    @endforeach
  @endif









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>