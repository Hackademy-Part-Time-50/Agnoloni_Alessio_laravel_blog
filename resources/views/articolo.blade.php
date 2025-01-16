<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Articolo Completo</title>
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

<div class="container mt-6">

  <div>
    <a href="{{ route('articoli') }}" class="btn" >Torna agli articoli</a> 
  </div>
    
    <h1>{{ $title }}</h1> 
    <h6>{{ $category }}</h6> 
    <p>{{ $description }}</p>

</div>