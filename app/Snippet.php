<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;

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
    public function __construct() {
        $this->indices[] = env('ALOGOLIA_INDEX');
    }
}
