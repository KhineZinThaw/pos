<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded=[];

    public function orders(){
        return $this->hasmany('App\Order');
    }
    public function profile(){
        return $this->hasOne('App\Profile');
    }
}
