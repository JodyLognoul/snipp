<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    protected $fillable = [
        'description',
        'namespace',
        'tags',
        'content',
        'public',
        'language',
    ];

    public function _getContentAttribute($value)
    {
        return $value;
    }
}
