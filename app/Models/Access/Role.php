<?php

namespace App\Models\Access;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions()
    {
        return $this->belongsToMany('App\Models\Access\Permission');
    }
}
