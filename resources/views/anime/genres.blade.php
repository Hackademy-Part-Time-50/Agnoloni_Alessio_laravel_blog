<x-layout titolo="Anime">
    <h1>Anime</h1>

    <div class="mt-5">
        <h3>Generi</h3>

        <div class="mt-3">
            @foreach ($anime_genres as $genre)
                <li>
                    <a href="{{ route('anime.byGenre', $genre['mal_id']) }}">
                        {{ $genre['name'] }} ({{ $genre['count'] }})
                    </a>
                </li>
            @endforeach
        </div>
    </div>
</x-layout>