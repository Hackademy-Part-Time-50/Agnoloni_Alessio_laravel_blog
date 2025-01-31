<x-layout titolo="$title">

  <div class="container mt-6">

    <div>
      <a href="{{ route('articoli') }}" class="btn" >Torna agli articoli</a> 
    </div>
      
    <h6>{{ $articolo->category }}</h6> 
    <h1>{{ $articolo->title }}</h1> 

    @if($articolo->image)
    <div class="mt-5">
      <img class=img-fluid src="{{Storage::url($articolo->image)}}" alt="{{ $articolo->title }}">
    </div>
    @endif

    <div class="mt-5">
    <p>{{ $articolo->description }}</p>
    </div>

    <div class="mt-5">
    <p>{{ $articolo->body }}</p>
    </div>
      
      
  </div>
</x-layout>