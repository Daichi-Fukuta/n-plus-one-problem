<?php

namespace App\Http\Controllers;

use App\Article;

class ArticleController extends Controller
{
    public function handle()
    {
        \DB::enableQueryLog();

        // $articles = Article::all();
        $articles = Article::with('author')->get();
        echo '<pre>';
        var_dump($articles);
        return;
        
        foreach($articles as $a) {
            $a->author->name;
        }

        dd(\DB::getQueryLog());
    }
}
