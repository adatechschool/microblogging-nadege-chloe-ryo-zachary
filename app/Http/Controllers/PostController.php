<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', ['post' => $post]);
    }
    public function store(CreatePostRequest $request)
    {

        // Création d'un nouveau post
        $post = new Post;
        $post->titre = $request->titre;
        $post->contenu = $request->contenu;
        $post->user_id = Auth::id();
        $post->save();

        // Redirection vers la page de succès ou vers la page du post créé
        return back()->with('status', 'Post créé avec succès');
    }
}
