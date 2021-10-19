<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Article $article)
    public function index(Article $article)

    {
        $articles = $article->take(10)->get();

        // dd($articles);

        return view('article.index', [
            'articles' => $articles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Article::create([
        //     'title' => 'Judul 1',
        //     'content' => 'Konten 1'
        // ]);


        //Jika ada kondisi if
        $article = new Article;

        $article->title = 'Judul 2';
        $article->content = 'Konten 2';

        $article->save();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $article = Article::findOrFail($request->id);

        $article->title = 'Post 1';
        $article->content = 'Content 1';

        $article->save();

        // $article->update([
        //     'title' => 'Post satu',
        //     'content' => 'Konten satu'
        // ]);
    }

    public function delete(Request $request)
    {
        $article = Article::findOrFail($request->id);

        $article->delete();

        // $article->update([
        //     'title' => 'Post satu',
        //     'content' => 'Konten satu'
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
