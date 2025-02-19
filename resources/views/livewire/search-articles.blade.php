<div>
    <h1>Ricerca Articoli</h1>
    <div class="mt-5">
        <div class="row">
            <div class="col-lg-6">
                <input wire:model.live="search" type="text" class="form-control">
            </div>
            <div class="col-lg-6">
                <h4>Elenco Articoli</h4>

                <div class="mt-3">
                    @foreach ($articles as $article)
                        <div>{{ $article->title }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
