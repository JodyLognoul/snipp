<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    protected $fillable = [
        'description',
        'content',
    ];

    public function getContentAttribute($value)
    {
        return $value;
        // return highlight_string($value);
    }
}
