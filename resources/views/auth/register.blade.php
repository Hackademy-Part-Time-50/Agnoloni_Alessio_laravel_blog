<x-layout titolo='Registati'>

    <div class="row">
        <div class="col-lg-6 mx-auto">
            <h1>Registrati</h1>
            <p class="lead text-secondary">Utilizza questo Form per registrarti</p>

        <form action="/register" method="POST">
        @csrf 
        <div class="row g-3">
            <div class="col-12">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" class="form-control">
                @error('name') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
                @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
                @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <label for="password_confirmation">Conferma Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Registrati</button>
            </div>
        </div>
    </form>
        </div>
    </div>

</x-layout>