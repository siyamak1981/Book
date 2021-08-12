<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkUs extends Model
{
    
        protected $casts = [
        'status' => 'array',
    ];
        protected $fillable = ['subject','status','body'];
       
        public function setStatusAttribute($value)
        {
            $this->attributes['status'] = json_encode($value);
        }
    
        public function getStatusAttribute($value)
        {
            return $this->attributes['status'] = json_decode($value);
        }
    }
    