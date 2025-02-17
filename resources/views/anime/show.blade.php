<x-layout titolo="{{ $anime['title'] }}">


    <div class="mt-5">

    <div class="mb-3">
        <a class="btn btn-primary" href="{{ route('anime.byGenre', $genre_id) }}">Indietro</a>
    </div>

        <div class="row">
            <div class="col-lg-6">
                <img src="{{ $anime['images']['jpg']['large_image_url'] }}" alt="{{ $anime['title'] }}" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h1>{{ $anime['title'] }}</h1>
                <h2 class="text-muted">{{ $anime['title_japanese'] }}</h2>

                <div class="mt-5">
                    <div>Score: {{ $anime['score'] }}/10</div>
                </div>

                <div class="mt-5">
                    <div>{!! nl2br(e($anime['synopsis'])) !!}</div>
                </div>
            </div>
        </div>
    </div>
</x-layout>