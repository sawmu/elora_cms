<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class star_count extends Model
{
    use HasFactory;
    protected $fillable = [
        'icon1',
        'number1',
        'text1',

        'icon2',
        'number2',
        'text2',

        'icon3',
        'number3',
        'text3',

    ];
}
