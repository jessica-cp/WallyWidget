<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WidgetPack extends Model
{
    protected $fillable = ['no_of_widgets', 'price'];

    protected $dates = ['created_at', 'updated_at'];

    /**Refer to App\Http\Controllers**/
    /**Change the const figures to its widget pack sizes**/
    /**Add const when you have added a new widget pack with its figure**/
    /**Delete const when you have removed a widget pack, as well as its figure**/

    const WIDGETONE = '250';
    const WIDGETTWO = '500';
    const WIDGETTHREE = '1000';
    const WIDGETFOUR = '2000';
    const WIDGETFIVE = '5000';
}
