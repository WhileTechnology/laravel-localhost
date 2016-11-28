<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     protected $fillable = ['test_id', 'name', 'email', 'address'];
   
}