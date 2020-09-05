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

 
    public function causes()
    {
        return $this->belongsTo(cause::class,'causes_id','id');
    }
}
