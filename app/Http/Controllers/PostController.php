<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $posts)
    {
        //Renvoie la vue 'posts/show.blade.php' avec le post récupéré
        return view('posts.show', ['post' => $posts]);
    }
}
