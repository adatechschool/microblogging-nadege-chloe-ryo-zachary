<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;

use Illuminate\Http\RedirectResponse;
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
    public function store(Request $request) : RedirectResponse {
        // dd($request);
        $request->validate([
            'title'=> 'required|max:255',
            'content'=>'required'
        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id=Auth::user()->id;
        $post->save();
        return redirect()->route('dashboard')->with('success','');
        // Post::create($request->all());
    }
}
