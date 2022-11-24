<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Recipe;

class Review extends Model
{
    //use HasFactory;
    protected $fillable = [
        'user_id',
        'recipe_id',
        'content',
    ];
    public $timestamps = true;
    
    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
