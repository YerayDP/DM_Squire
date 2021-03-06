<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    protected $table = 'weapons';

    protected $fillable = [
        'name','properties', 'DMG', 'weight','type'
    ];
    public function weapon_pj(){
        return $this->hasMany('App\Weapon_PJ');
    }
}
