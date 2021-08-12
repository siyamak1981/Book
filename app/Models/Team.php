<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fallable = ['title', 'summary', 'name', 'image', 'role'];
}
