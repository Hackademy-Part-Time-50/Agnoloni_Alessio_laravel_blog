<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public const BASE_URL = 'https://api.jikan.moe/v4/';

    public function genres()
    {
        $anime_genres = Http::get(self::BASE_URL . 'genres/anime')->json();

        return view('anime.genres', [
            'anime_genres'=> $anime_genres['data'],
        ]);
    }

    public function byGenre($genre_id)
    {
        $anime_genres = Http::get(self::BASE_URL . 'genres/anime')->json();

        $title = '';
        foreach($anime_genres['data'] as $genre) {
            if ($genre['mal_id'] == $genre_id) {
                $title = $genre['name'];
            }
        }

        $anime = Http::get(self::BASE_URL . 'anime?genres'. $genre_id)->json();

        $anime= Arr::map($anime['data'], function($item) {
            return [
                'id'=> $item['mal_id'],
                'title'=> $item['title'],
                'type'=> $item['type'],
                'image'=> $item['images']['jpg']['image_url'],
            ];
        });

        return view('anime.byGenre', [
            'anime'=> $anime,
            'genre'=> $genre_id,
            'title'=> $title,
        ]);
    }

    public function show($anime_id, $genre_id)
    {
        $anime = Http::get(self::BASE_URL . 'anime/'. $anime_id)->json();

        return view('anime.show', [
            'anime'=> $anime['data'],
            'genre_id'=> $genre_id,
        ]);
    }
}
