<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  
    
    public function category(){

        return $this->belongsToMany(Category::class);
    }

    public function subcategory(){

        return $this->belongsToMany(SubCategory::class);
    }
 
}
