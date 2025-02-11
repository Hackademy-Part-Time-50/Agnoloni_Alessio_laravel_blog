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
                <label>Categoria</label>
                @foreach($categories as $category)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="categories[]" 
                    value="{{ $category->id }}" id="category_{{ $category->id }}" 
                    @checked(in_array($category->id, old('categories', [])))>
                    <label class="form-check-label" for="category_{{ $category->id }}">
                        {{ $category->name }}
                    </label>
                </div>
                @endforeach    
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