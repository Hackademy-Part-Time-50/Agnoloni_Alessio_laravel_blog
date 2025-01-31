
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
                    <a class="nav-link" href="{{'/articoli'}}">Articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{'/contatti'}}">Contatti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{'/chi-siamo'}}">Chi Siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('articles.create') }}">Crea articolo</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
