<x-layout titolo="$title">

  <div class="container mt-6">

    <div>
      <a href="{{ route('articles') }}" class="btn" >Torna agli articoli</a> 
    </div>
      
    <h6>{{ $article->category }}</h6> 
    <h1>{{ $article->title }}</h1> 

    <div class="mt-5">
    <p>{{ $article->description }}</p>
    </div>

    <div class="mt-5">
      <div class="row">
        <div class="col-lg-6">
          @if($article->image)
            <img class=img-fluid src="{{Storage::url($article->image)}}" alt="{{ $article->title }}">
          @endif
        </div>
        <div class="col-lg-6">
          <p>{{ $article->body }}</p>
        </div>
      </div>
    </div>
      
  </div>

</x-layout>