<x-layout titolo="Crea un nuovo articolo">
    <div class="col-lg-6 mx auto">

    <a href="{{ route('articles.index') }}" class="mb-3 btn btn-sm btn-secondary">Indietro</a>

    <h1>Crea nuovo Articolo</h1>

    <x-alert_success/>

    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            <div class="col-12">
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                @error('title') <span class="small text-danger">{{$message}}</span>@enderror
            </div>
            <div class="col-12">
                <label for="category_id">Categoria</label>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id') <span class="small text-danger">{{$message}}</span>@enderror
            </div>
            <div class="col-12">
                <label for="description">Descrizione</label>
                <input type="text" name="description" id="description" class="form-control" value="{{ old('description') }}">
                @error('description') <span class="small text-danger">{{$message}}</span>@enderror
            </div>
            <div class="col-12">
                <label for="image">Immagine</label>
                <input type="file" name="image" id="image" class="form-control">
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