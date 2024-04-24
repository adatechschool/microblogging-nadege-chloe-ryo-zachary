<?php

namespace App\Http\Controllers;
use  App\Models\Post;
use  App\Models\User;
use Illuminate\Http\Request;

class DashboarController extends Controller
{
    public function index() {
        $posts = Post::all();
        $posts = Post::with('user')->get();
        return view("dashboard", ['posts'=> $posts]);
    }
}
