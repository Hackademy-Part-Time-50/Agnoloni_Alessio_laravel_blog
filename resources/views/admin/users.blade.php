<x-layout titolo="Gestione Utenti">
    <h1>Gestione Utenti</h1>

    <div class="mt-5">
        <div class="row">
            <div class="col-lg-3">
                <livewire:user-form/>
            </div>
            <div class="col-lg-9">
                <livewire:users-list/>
            </div>
        </div>
    </div>
</x-layout>