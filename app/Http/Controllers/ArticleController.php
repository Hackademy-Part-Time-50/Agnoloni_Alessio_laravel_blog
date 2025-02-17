<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {   
        $articles = Article::where('user_id', auth()->user()->id)->get();

        return view('articles.index',[
            'articles'=>$articles,
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

        $article->user_id = auth()->user()->id;

        $article->categories()->attach($request->categories);

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $folder_name = 'articles/' . $article->id;

            $file_name = uniqid('image').'.'.$request->file('image')->extension();
            
            $file_path = $request->file('image')->storeAs($folder_name, $file_name, 'public');

            $article->image = $file_path;

        }  

        $article->save();
        
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
        if($article->user_id != auth()->user()->id) {
            abort(403);
        }    

        return view('articles.edit', [
            'article' => $article,
            'categories'=> \App\Models\Category::all(),
        ]);
    }

    public function update(Article $article, StoreArticleRequest $request)
    {
        if($article->user_id != auth()->user()->id) {
            abort(403);
        }

        $article->update($request->all());    

        $article->categories()->detach();
        $article->categories()->attach($request->categories);

        return redirect()->route('articles.index')->with(['success'=> 'Articolo modificato correttamente.']);
    }

    public function destroy(Article $article)
    {
        if($article->user_id != auth()->user()->id) {
            abort(403);
        }

        $article->categories()->detach();
        
        $article->delete();

        return redirect()->route('articles.index')->with(['success'=>'Articolo cancellato correttamente.']);
    }

    public function ApiArticles() {

        $articles = Article::all();
        return response()->json($articles);
    }
}
