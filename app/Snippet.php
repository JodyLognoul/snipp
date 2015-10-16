<?php

namespace App;

use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;
use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    use AlgoliaEloquentTrait;

    public $indices = [];

    protected $fillable = [
        'description',
        'namespace',
        'tags',
        'content',
        'public',
        'language',
    ];

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->indices[] = env('ALOGOLIA_INDEX');
    }
}
