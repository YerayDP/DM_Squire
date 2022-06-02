<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weapon_PJ extends Model
{
    protected $table = 'weapons_pj';

    protected $fillable = [
        'PJ_id', 'weapon_id'
    ];
    public function PJ(){
        return $this->belongsTo('App\PJ','PJ_id');
    }
    public function weapon(){
        return $this->belongsTo('App\Weapon','weapon_id');
    }
}
