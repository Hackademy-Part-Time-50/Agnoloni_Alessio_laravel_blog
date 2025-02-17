<x-layout :titolo="config('app.name')">
    <h1>{{ config('app.name') }}</h1>

    <div class="mt-5">
        <ul id="articles-list"></ul>
    </div> 
    
    <script type="module" src="{{ asset('resources/js/app.js') }}"></script>
</x-layout> 