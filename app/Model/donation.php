<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class donation extends Model
{
    protected $fillable = [
       'causes_id',
        'name',
        'email',
        'total_donation',
    ];
}
