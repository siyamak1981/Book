<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategory;

class Category extends Model
{

    public function posts()
    {
        return $this->belongsToMany('App\Models\post', 'category_posts')->orderBy('created_at', 'DESC')->paginate(5);
    }

   
    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = [
        'category_name'
    ];
    
    public function subcategories(){
        return $this->hasMany(SubCategory::class, 'category_id', 'id');
    }
    

    public function products()
    {
        return $this->hasManyThrough(
            Product::class, SubCategory::class,
            'category_id', 'subcategory_id', 'id','id'
        );
    }
}