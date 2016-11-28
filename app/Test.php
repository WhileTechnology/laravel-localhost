<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model {
// this from gits 
    protected $fillable = ['name', 'email', 'address'];

    public function order() {
        return $this->hasOne('App\Order');
    }

}
