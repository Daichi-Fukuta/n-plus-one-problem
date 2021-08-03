<?php

namespace App\Http\Controllers;

use App\Author;

class AuthorController extends Controller
{
    public function handle()
    {
        $author = Author::find(1);
        dd($author);
    }
}