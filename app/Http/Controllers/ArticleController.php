<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;


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


    public function user()

    {
        $user = User::where('username', 'pradana')->first();

        // dd($articles);

        return $user->getFullName();
        
    }

    public function show(User $user)

    {
        // $user = User::find($id);

        dd($user);

        
    }

    public function active()

    {
        // $user = User::where('activated', true)->get();

        $user = User::active()->get();

        dd($user);

        // return $user->getFullName();
        
    }

    public function age()

    {
        // $user = User::where('age', '>', '20')->get();
        $user = User::active()->ageGreaterThan(20)->get();


        dd($user);

        // return $user->getFullName();
        
    }


    public function search(Request $request)

    {
    // mencari berdasarkan boolean
    // $article = Article::where('is_published', false)->get();

    //mengurutkan data berdasarkan id dan created_at
    //take hanya mengambil beberapa data tertentu
    $article = Article::latest()->take(3)->get();

    // $article = Article::orderBy('id', 'desc')->get();


       dd($article);
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

        $article->title = 'Judul 3';
        $article->content = 'Konten 3';

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
