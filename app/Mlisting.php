<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mlisting extends Model
{
    
    public function User()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function Mdeveloper()
    {
        return $this->belongsTo('App\Mdeveloper','mdeveloper_id');
    }

    
}
