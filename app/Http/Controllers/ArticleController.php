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
        $article = Article::create($request->except('_token'));

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $folder_name = 'articles/' . $article->id;

            $file_name = uniqid('image').'.'.$request->file('image')->extension();
            
            $file_path = $request->file('image')->storeAs($folder_name, $file_name, 'public');

            $article->image = $file_path;

            $article->save();
        }  
        // Article::create([
        //     'title' => $request->title,
        //     'category' => $request->category,
        //     'description'=> $request->description,
        //     'body' => $request->body, 
        // ]);
        
        return redirect()->back()->with(['success'=>'Articolo creato correttamente.']);
    }
}
