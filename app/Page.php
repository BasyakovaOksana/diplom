<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'slug', 'title', 'seo_title', 'meta_description', 'content', 'settings'
    ];
    protected $casts = [
        'settings' => 'array'
    ];
}
