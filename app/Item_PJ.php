<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_PJ extends Model
{
    protected $table = 'items_PJ';
    
    protected $fillable = [
        'items_id','PJ_id'
    ];
    public function PJ(){
        return $this->belongsTo('App\PJ','PJ_id');
    }
    public function items(){
        return $this->belongsTo('App\Item','items_id');
    }
}
