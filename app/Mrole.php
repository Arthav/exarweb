<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mrole extends Model
{
    public function Mpolicy()
{
    return $this->belongsTo('App\Mpolicy','mpolicy_id');
}
}
