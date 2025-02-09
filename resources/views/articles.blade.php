<x-layout titolo="Articoli">
  


  <h1>Articoli</h1>


  {{--
  <!-- @if(! $lista_articoli)
      <h3>Nessun articolo disponibile</h3>
  @else
    @foreach($lista_articoli as $articolo)
    
        <div class="col-lg-10">
          <div class="mt-5 text-end">
            <a href="{{ route('articolo',$articolo->id }}" class="btn btn-primary">{{ $articolo['title'] }}</a>
          </div>
        </div>
    

      @if($articolo['visible'])
      <div class="shadow-sm p-4 rounded">
        <div class="row">
          <div class="col-lg-2 card-body">
            <x-card :route="route('articolo', ['id' => $articolo['id']])" 
                    :title="$articolo['title']" 
                    :articolo="$articolo['category']"
            />
            @if ($articolo->image)
              <img class=img-fluid src="{{Storage::url($articolo->image)}}" alt="{{ $articolo['title'] }}">
            @endif
          </div>
        </div>
      </div>
      @endif 
    @endforeach
  @endif -->
  --}}

  <div class="mt-5">
        @foreach($articles as $article)
            <div class="shadow-sm p-4 rounded mb-2">
                <div class="row">
                    <div class="col-lg-2">
                        @if($article->image)
                        <img class="img-fluid" src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}">
                        @endif
                    </div>
                    <div class="col-lg-10">
                        <h4>{{ $article->title }}</h4>
                        <!-- <p>{{ $article->category }}</p> -->
                        <p>{{ $article->description }}</p>
                        <p class="text-muted">{{ $article->user->name }}</p>

                        <div class="mt-5 text-end">
                            <a href="{{ route('article', $article->id) }}" class="btn btn-primary">Leggi articolo...</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>