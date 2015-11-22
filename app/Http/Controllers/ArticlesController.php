<?php

namespace App\Http\Controllers;

use App\Article;

class ArticlesController extends Controller
{
    public function show($id)
    {
        return view('articles.show')->withArticle(Article::find($id));
    }
}