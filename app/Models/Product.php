<?php

namespace App\Models\Access;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  
    
    public function category(){

        return $this->belongsToMany(Category::class);
    }

    public function subcategory(){

        return $this->belongsToMany(SubCategory::class);
    }
    public function brand(){

        return $this->belongsToMany(Brand::class);
    }
}
