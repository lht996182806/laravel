<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shopcar extends Model
{
    public function goods(){
        return $this->hasOne('App\Models\Goods','goods_id');
    }
}
