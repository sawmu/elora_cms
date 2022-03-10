<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'shape_mark',
        'image',
        'btn_name',
        'btn_link',
        'youtube_name',
        'youtube_link',

    ];
}
