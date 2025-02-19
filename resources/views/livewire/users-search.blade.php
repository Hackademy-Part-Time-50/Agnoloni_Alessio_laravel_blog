<div>
    <h1>Ricerca Utenti</h1>

    <div class="mt-5">
        <div class="row">
            <div class="col-lg-6">
                <input wire:model.live="search" type="text" class="form-control">
            </div>
            <div class="col-lg-6">
                <h4>Elenco Utenti</h4>

                <div class="mt-3">
                    @foreach ($users as $user)
                        <div>{{ $user->name }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
