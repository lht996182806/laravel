<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class goods extends Model
{
    public function shopcar(){
        return $this->belongsTo('App\Models\Shopcar');
    }
}
