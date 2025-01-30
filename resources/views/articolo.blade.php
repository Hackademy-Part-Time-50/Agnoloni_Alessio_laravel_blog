<x-layout titolo="$title">

  <div class="container mt-6">

    <div>
      <a href="{{ route('articoli') }}" class="btn" >Torna agli articoli</a> 
    </div>
      
      <h1>{{ $articolo->title }}</h1> 
      <h6>{{ $articolo->category }}</h6> 
      <p>{{ $articolo->description }}</p>

  </div>
</x-layout>