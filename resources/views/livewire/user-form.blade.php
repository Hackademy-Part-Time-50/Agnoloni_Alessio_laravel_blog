<div>
    <h3>{{ $user_id ? 'Modifica Utente' : 'Crea Utente' }}</h3>

    <hr>

    <x-alert_success/>

    <div>
        <form wire:submit="save">
            <div class="row g-3">
                <div class="col-12">
                    <label for="name">Nome</label>
                    <input wire:model="name" type="text" name="name" id="name" class="form-control">
                    @error('name') <span class="small text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="col-12">
                    <label for="email">Email</label>
                    <input wire:model="email" type="email" name="email" id="email" class="form-control">
                    @error('email') <span class="small text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="col-12">
                    <label for="password">Password</label>
                    <input wire:model="password" type="password" name="password" id="password" class="form-control">
                    @error('password') <span class="small text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">
                        {{ $user_id ? 'Modifica' : 'Crea' }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
