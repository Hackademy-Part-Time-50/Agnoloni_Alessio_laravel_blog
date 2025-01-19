<x-layout titolo="Articoli">
  


  <h1>Articoli</h1>


  @if(! $lista_articoli)
      <h3>Nessun articolo disponibile</h3>
  @else
    @foreach($lista_articoli as $articolo)
      @if($articolo['visible'])
        <x-card :route="route('articolo', ['id' => $articolo['id']])" 
                :title="$articolo['title']" 
                :articolo="$articolo['category']" 
        />
      @endif
    @endforeach
  @endif
    
</x-layout>