<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tournament;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $tournaments        = Tournament::latest()->limit(3)->get();
        $posts              = Post::where('status', 'PUBLISHED')->where('featured', true)->whereNotNull('image')->orderBy('id', 'DESC')->limit(6)->get();
        return view('main.index',compact('posts','tournaments'));
    }
}
