<x-layout titolo="Crea un nuovo articolo">
    <div class="col-lg-6 mx auto">

    <h1>Crea nuovo Articolo</h1>

    <x-alert_success/>

    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="row g-3">
            <div class="col-12">
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                @error('title') <span class="small text-danger">{{$message}}</span>@enderror
            </div>
            <div class="col-12">
                <label for="category">Categoria</label>
                <input type="text" name="category" id="category" class="form-control" value="{{ old('category') }}">
                @error('category') <span class="small text-danger">{{$message}}</span>@enderror
            </div>
            <div class="col-12">
                <label for="description">Descrizione</label>
                <input type="text" name="description" id="description" class="form-control" value="{{ old('description') }}">
                @error('description') <span class="small text-danger">{{$message}}</span>@enderror
            </div>
            <div class="col-12">
                <label for="body">Corpo</label>
                <textarea name="body" id="body" class="form-control" rows="10" >{{ old('body') }}</textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Crea</button>
            </div>
        </div>
    </form>
    </div>
</x-layout>