<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        $GetPost = $post -> get();
        return view('articles.articles', [
            'GetPost'   => $GetPost
        ]);
    }

    public function show($slug)
    {
        return view('articles.page_article');
    }

}
