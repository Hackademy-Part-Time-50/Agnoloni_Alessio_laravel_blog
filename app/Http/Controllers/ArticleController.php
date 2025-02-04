<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        return view('articles.index',[
            'articles'=>Article::all(),
        ]);
    }

    public function create()
    {
        return view('articles.create',[
            'categories'=> \App\Models\Category::all(),
        ]);
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

    public function edit(Article $article)
    {
        return view('articles.edit', [
            'article' => $article,
            'categories'=> \App\Models\Category::all(),
        ]);
    }

    public function update(StoreArticleRequest $article, Request $request)
    {
        $article->update($request->all());    

        return redirect()->route('articles.index')->with(['success'=> 'Articolo modificato correttamente.']);
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')->with(['success'=>'Articolo cancellato correttamente.']);
    }
}
