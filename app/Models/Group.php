<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Recipe;

class Group extends Model
{
    //use HasFactory;
    public function recipe()
    {
        return $this->hasMany(Recipe::class);
    }
}
