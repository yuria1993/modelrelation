<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorCOntroller extends Controller
{
   
    public function relate(Request $request)
    {
        $authors = Author::all();
        return view('author.index',['authors' => $authors]);
    }
}
