<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
        return $this->belongsToMany('App\Models\post', 'post_tags')->orderBy('created_at', 'DESC')->paginate(5);
    }

   
    public function getRouteKeyName()
    {
        return 'slug';
    }
}