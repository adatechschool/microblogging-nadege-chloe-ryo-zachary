<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request)
    {
        $user = $request->user();
        $posts = $user->posts;

        //Renvoie la vue 'posts/show.blade.php' avec le post récupéré
        return view('users.show', compact('user','posts'));
    }
}
