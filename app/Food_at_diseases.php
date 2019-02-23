<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food_at_diseases extends Model
{
    protected $fillable = [
        'slug', 'title', 'seo_title', 'meta_description', 'content', 'image',
        'category_id', 'is_recommended', 'is_forbidden', 'diet'
    ];
}




