<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class cause extends Model
{
    protected $table = "causes";
    protected $fillable = [
        'title',
        'category',
        'thumbnail',
        'goal',
        'fund_raished',
        'description',
        'date_end'
    ];

    public function getThumbnailAttribute($value)
    {
        return url('storage/' . $value);
    }

    public function donation()
    {
        return $this->hasMany(causes::class,'causes_id','id',);
    }
}
