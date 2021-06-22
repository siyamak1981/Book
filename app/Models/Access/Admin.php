<?php

namespace App\Models\Access;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use Notifiable;

    public function roles()
    {
        return $this->belongsToMany('App\Models\Access\Role');
    }

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name', 'link_1','link_2','link_3','link_4', 'email', 'password','status','phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
