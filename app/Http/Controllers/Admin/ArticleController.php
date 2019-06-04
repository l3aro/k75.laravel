<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where('id','1')
        // ->select("title", "author as author_name")
        // ->where('id','1')
        // ->where('title','like','%món%') // < > <= >= = like
        // ->where('id', '<', '3')
        // ->orWhere('id', '>', '3')
        // ->whereIn('id', [1, 2, 3])
        // ->whereNotIn('id', [1, 2, 3])
        // ->whereBetween('id',[1, 3])
        // ->whereNotBetween('id',[1, 3])
        // ->whereNull('avatar')
        // ->whereNotNull('avatar')
        // ->whereDate('created_at', '2019-05-31') 
        // ->whereDay('created_at', '30') day in month
        // ->whereMonth('created_at', '5')
        // ->whereYear('created_at', '2018')
        // ->where('created_at')
        // ->orderBy('id', 'desc')
        // ->latest()
        // ->oldest()
        // ->where('created_at', '>=', '2019-05-29')
        // ->where('created_at', '<', '2019-05-31')
        // ->whereBetween('created_at', ['2019-05-29','2019-05-31'])
        // ->offset(2)
        // ->limit(3)
        ->get();
        // $article = \DB::table("articles")->first();
        // print_r($articles);die;
        return view('admin.articles', compact('articles'));
    }

    public function store(Request $request)
    {
        Article::create($request->all());
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.show_article', compact('article'));
    }

    public function update(Request $request, $id)
    {       
        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();
    }
}
