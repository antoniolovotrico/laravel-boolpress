<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu_link = config('nav_menu_links');
        $articles = Article::latest()->get();
        return view('articles.index', compact('articles', 'menu_link'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu_link = config('nav_menu_links');
        $tags = Tag::all();
        $categories = Category::all();
        return view('articles.create', compact('menu_link','tags','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // creiamo la validazione creando una variabile per salvarvi all'interno i dati validati
        $validated_data = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
            'tag' => 'exists:tags, id'
        ]);

           
        // $newArticle = new Article;
        // $newArticle -> title = request('title');
        // $newArticle -> body = request('body');
        // $newArticle -> save();
        
        Article::create($validated_data);
        
        $article = Article::orderBy('id','desc')->first();
        $article->tags()->attach($request->tags);
        
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $menu_link = config('nav_menu_links');
        return view('articles.show', compact('article', 'menu_link'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $menu_link = config('nav_menu_links');
        $tags = Tag::all();
        $categories = Category::all();
        return view('articles.edit', compact('article','menu_link','tags','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
         // creiamo la validazione creando una variabile per salvarvi all'interno i dati validati
         $validated_data = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
            'tag' => 'exists:tags, id'
        ]);
        // $data = $request -> all();
        $article -> update($validated_data);
        return redirect()-> route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()-> route('articles.index');
    }
}
