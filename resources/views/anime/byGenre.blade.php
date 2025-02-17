<x-layout :titolo="$title">

    <h1>{{ $title }}</h1>

    <div class="mt-5">

        <div class="mt-3">
            <div class="row">
            @foreach ($anime as $anime)
                <div class="col-lg-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <span>{{ $anime['type'] }}</span><br>
                            <h5>{{ $anime['title'] }}</h5>
                        </div>
                        <div class="card-body">
                            <img class="img-fluid" 
                            src="{{ $anime['image'] }}" alt="{{ $anime['title'] }}">
                        </div>
                        <div class="card-footer text-end">
                            <a class="btn btn-primary" href="{{ route('anime.show', [$anime['id'], $genre]) }}">Leggi di piu...</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</x-layout>