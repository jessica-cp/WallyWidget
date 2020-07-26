<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WidgetPacks extends Model
{
    protected $fillable = ['no_of_widgets', 'price'];

    protected $dates = ['created_at', 'updated_at'];
}
