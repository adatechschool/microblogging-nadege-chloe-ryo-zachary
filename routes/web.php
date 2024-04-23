<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Mise à jour de la biographie
    Route::patch('/profile/update-bio', [ProfileController::class, 'update'])->name('profile.update');


    //Nouvelle route pour visualiser le contenu d'un post : {post} est un paramètre dynamique (représente l'ID du post)
    //Route associée à la méthode 'show' du contrôlleur 'PostController'
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

    //Route pour les users
    Route::get('/user', [UserController::class, 'show'])->name('users.show');
});

require __DIR__.'/auth.php';