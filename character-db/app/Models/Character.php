<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'race',
        'class',
        'subclass',
        'description',
        'published',
        'photo'
    ];
    public static function itOK() {
        return ("model is working");
    }
}


