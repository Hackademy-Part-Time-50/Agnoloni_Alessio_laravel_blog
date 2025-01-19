<x-layout titolo="Specifica Componenti">

<div>
    <h1>{{$name}}</h1>

    <h3>{{$category}}</h3>

    <p>{{$description}}</p>

    <a href="{{ route('about_us') }}" class="btn ">Torna a Chi Siamo</a>
</div>


</x-layout>