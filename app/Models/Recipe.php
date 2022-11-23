<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Review;
use App\Models\Like;
use App\Models\Ingredient;

class Recipe extends Model
{
    //use HasFactory;
    public $timestamps = true;

    public function ingredient()
    {
        return $this->belongsToMany(Ingredient::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function like()
    {
        return $this->hasMany(Like::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
