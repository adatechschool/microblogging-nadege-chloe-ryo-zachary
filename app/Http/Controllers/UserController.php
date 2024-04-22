<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request)
    {
        //Renvoie la vue 'posts/show.blade.php' avec le post récupéré
        return view('users.show', [
            'user' => $request->user(),
        ]);
    }
}
