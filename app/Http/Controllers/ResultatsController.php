<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultatsController extends Controller
{
    public function index()
    {
        return view('resultats.index');
    }
}
