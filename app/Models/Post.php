<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'post_tags')->withTimestamps();
    }
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'category_posts')->withTimestamps();
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
