<x-layout titolo="$title">

  <div class="container mt-6">

    <div>
      <a href="{{ route('articoli') }}" class="btn" >Torna agli articoli</a> 
    </div>
      
      <h1>{{ $title }}</h1> 
      <h6>{{ $category }}</h6> 
      <p>{{ $description }}</p>

  </div>
</x-layout>