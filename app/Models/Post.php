<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // The fillable property is used to define which fields can be mass assigned.
    protected $fillable = ['title', 'content'];

    // The user method defines a relationship between the Post and User models, where a post belongs to a ONE user.
    //permet à Eloquent de comprendre comment récupérer l'utilisateur auquel un post appartient.
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
