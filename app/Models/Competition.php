<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = ['title', 'summary', 'slug', 'image', 'alt', 'status'];
}
