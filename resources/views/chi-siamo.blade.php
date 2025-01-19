<x-layout titolo="$titolo">

  <h1>{{$titolo}}</h1>

  <p>{{$paragrafo}}</p>

    @if (!empty($gruppo)) 
    <ul> 
        @foreach($gruppo as $membro) 
        <li>
        <a href="{{route('Info_membro', ['id' => $membro['id']]) }}">

          {{ $membro['name'] }}
            
        </a>
        </li> 
        @endforeach 
    </ul> 
    @endif

</x-layout>
