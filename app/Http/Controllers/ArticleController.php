<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        return view('articles.create');
    }

    public function store(StoreArticleRequest $request)
    {
        Article::create([
            'title' => $request->title,
            'category' => $request->category,
            'description'=> $request->description,
            'body' => $request->body, 
        ]);

        return redirect()->back()->with(['success'=>'Articolo creato correttamente.']);
    }
}
