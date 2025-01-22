<x-layout titolo="Contatti">

    

    <div class="col-lg-6 mx-auto">
        <h1>Contatti</h1>

        <x-alert_success/>

            <div class="mt-5">
                <form action="{{ route('contacts.receive') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="col-12">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="col-12">
                            <label for="message">Messagio</label>
                            <textarea name="message" id="message" class="form-control" rows="6"></textarea>
                        </div>
                        <div class="col-12 text-end">
                            <button type="submit" class= "btn btn-primary">Invio</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>

</x-layout>









