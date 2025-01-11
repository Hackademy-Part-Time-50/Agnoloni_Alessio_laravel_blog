<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articoli', function () {
    return view('articoli');
});

Route::get('/chi-siamo', function () {

    $gruppo = [
        'Alessio',
        'Francesco',
        'Giuseppe'
    ];
    if (empty($gruppo)) {
        return view('pagina_in_costruzione',[
            'titolo'=>'Pagina in costruzione'
        ]);
    }elseif (count($gruppo) === 1) {
        return view('chi-siamo',[
            'titolo'=>'Chi sono',
            'paragrafo'=>'Io sono....',
            'gruppo'=>$gruppo
        ]);
    }else {
        return view('chi-siamo',[
            'titolo'=>'Chi siamo',
            'paragrafo'=>'Noi siamo....',
            'gruppo'=>$gruppo,
        ]);
    }

    
});

Route::get('/contatti', function () {
    return view('contatti');
});
