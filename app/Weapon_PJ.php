<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weapon_PJ extends Model
{
    protected $table = 'weapon__p_js';

    protected $fillable = [
        'name','PJ_id', 'weapon_id'
    ];
    public function PJ(){
        return $this->belongsTo('App\PJ','PJ_id');
    }
    public function weapon(){
        return $this->belongsTo('App\Weapon','weapon_id');
    }
}
