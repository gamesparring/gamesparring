<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'PUBLISHED')->where('featured', true)->whereNotNull('image')->orderBy('id', 'DESC')->limit(6)->get();
        return view('main.index',compact('posts'));
    }
}
