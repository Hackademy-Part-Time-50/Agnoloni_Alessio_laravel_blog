<x-layout titolo="Gestione Categorie">

    <div class="row">
        <div class="col-lg-6">
            <h1>Gestione Categorie</h1>
        </div>
        <div class="col-lg-6 text-end">
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Crea Categoria</a>
        </div>
    </div>

    <x-alert_success/>

    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Articoli</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        @foreach ($category->articles as $article)
                        {{ $article->title }}<br>
                        @endforeach
                    </td>

                    <td class="text-end">
                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-secondary">Modifica</a>

                    <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline ms-1">
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