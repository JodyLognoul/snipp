<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    protected $fillable = [
        'description',
        'namespace',
        'content',
        'public',
        'language',
    ];

    public function _getContentAttribute($value)
    {
        return $value;
    }
}
