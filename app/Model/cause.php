<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class cause extends Model
{
    protected $table = "causes";
    protected $fillable = [
        'title',
        'category',
        'thumnail',
        'thumbnail',
        'goal',
        'description',
        'date_end'
    ];
}
