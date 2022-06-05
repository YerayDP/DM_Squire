<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    //SE = Start Equipment
    //ST = Saving Throws
    protected $fillable = [
        'name','weight','AC'
    ];
    public function Item_PJ(){
        return $this->hasMany('App\Item_PJ');
    }
}
