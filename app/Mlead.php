<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mlead extends Model
{
    

    

    public function scopeSearch($query, $s)
{
    return $query->where('deskripsi', 'like', '%' .$s.'%');
}
}
