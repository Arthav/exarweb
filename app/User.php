<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

public function Mrole()
{
    return $this->belongsTo('App\Mrole','mrole_id');
}


public function scopeSearch($query, $s)
{
    return $query->where('name', 'like', '%' .$s.'%')
  ->orWhere('id', 'like', '%' . $s . '%')
  ->orWhere('email', 'like', '%' . $s . '%');
}

}
