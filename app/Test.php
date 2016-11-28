<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model {
// this
    protected $fillable = ['name', 'email', 'address'];

    public function order() {
        return $this->hasOne('App\Order');
    }

}
