<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mtransaction extends Model
{
    public function Mlisting()
{
    return $this->belongsTo('App\Mlisting','mlisting_id');
}



}
