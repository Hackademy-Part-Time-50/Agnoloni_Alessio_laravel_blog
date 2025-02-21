<div>
    <h3>Elenco Utenti</h3>
    
    <div class="mt-5">
        @foreach ($users as $user)
            <div class="shadow-sm rounded p-3 mb-2">
                <div class="row">
                    <div class="col-lg-6">
                        <h6>{{ $user->name }}</h6>
                    </div>
                    <div class="col-lg-6 text-end">
                        <button wire:click="editUser({{ $user->id }})"
                                class="btn btn-secondary">Modifica</button>

                        <button wire:click="deleteUser({{ $user->id }})" 
                                wire:confirm="Sei sicuro di voler cancellare l'utente?"
                                class="ms-2 btn btn-danger">Elimina</button>
                    </div>
                </div>
                <div class="mt-2">{{ $user->email }}</div>
            </div>
        @endforeach
    </div>
</div>
