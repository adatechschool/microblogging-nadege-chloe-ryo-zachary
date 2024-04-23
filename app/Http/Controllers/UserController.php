<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::with('posts')->findOrFail($id);
        return view('user.show', ['user' => $user]);
    }
}
