<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model {

    protected $fillable = ['name', 'email', 'address'];

    public function order() {
        return $this->hasOne('App\Order');
    }

}
