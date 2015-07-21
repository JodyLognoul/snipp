<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    protected $fillable = [
        'description',
        'content',
        'public',
        'language',
    ];

    public function _getContentAttribute($value)
    {
        return $value;
    }
}
