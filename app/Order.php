<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = 'orders';

    protected $fillable = ['user_id', 'total'];

    protected $dates = ['created_at', 'updated_at'];
}
