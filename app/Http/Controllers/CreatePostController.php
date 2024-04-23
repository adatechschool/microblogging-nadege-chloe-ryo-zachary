<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class CreatePostController extends Controller
{

    //function pour voir le form creation de post avec le input

    //function qui permet de post les infos entré dans l'input vers la db

    //function update pour vider les input

    public function create(Request $request)
    {
        return view('posts.create', [
            'post' => $request->post(),
        ]);
    }
    // public function store(Request $request);
}
