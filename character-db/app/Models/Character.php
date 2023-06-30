<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    // use HasFactory;
    // public static function itOK() {
    //     return ("model is working");
    // }

    protected $fillable = ['type', 'name', 'race', 'class', 'subclass', 'description', 'published', 'created_at', 'photo', 'user_id'];
}


