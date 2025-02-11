<x-layout titolo='Gestione Articoli'>

    <div class="row">
        <div class="col-lg-6">
            <h1>Gestione Articoli</h1>
        </div>
        <div class="col-lg-6 text-end">
            <a href="{{ route('articles.create') }}" class="btn btn-primary">Crea Articolo</a>
        </div>
    </div>

    <x-alert_success/>

    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>#</th>
                <th>Titolo</th>
                <th>Categoria</th>
                <th>Descrizione</th>
                <th>Corpo Articolo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>
                    @foreach ($article->categories as $category)
                    <span class="me-2">{{ $category->name }}</span>
                    @endforeach
                </td>
                <td>{{ $article->description }}</td>
                <td>{{ $article->body }}</td>
                <td class="text-end">
                    <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-secondary">Modifica</a>

                    <form action=" {{ route('articles.destroy', $article) }} " method="POST" class="d-inline ms-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Cancella</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>