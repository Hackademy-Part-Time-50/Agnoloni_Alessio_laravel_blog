
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{'/'}}">{{config('app.name')}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{'/'}}">Home</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="{{'/articles'}}">Articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{'/anime'}}">Anime</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{'/contatti'}}">Contatti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{'/chi-siamo'}}">Chi Siamo</a>
                </li>
            </ul>
            @auth
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->email }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li class="dropdown-item">
                            <a class="nav-link" href="{{ route('articles.index') }}">Gestisci articoli</a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link" href="{{ route('categories.index') }}">Gestisci categorie</a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Esci</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            @else
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/register">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Accedi</a>
                </li>
            </ul>
            @endauth
        </div>
    </div>
</nav>

