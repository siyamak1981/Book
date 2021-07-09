<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{

    protected $fillable = [
        'category_id', 'subcategory_name'
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function products()
    {
        return $this->hasMany(
            Product::class,
            'subcategory_id',
            'id'
        );
    }
}
