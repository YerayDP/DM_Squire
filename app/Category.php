<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
//SE = Start Equipment
//ST = Saving Throws
    protected $fillable = [
        'name','archetype', 'hitdice','armor_prof','weapon_prof','tools_prof','ST_prof', 'skills_prof'
        ,'SE_prof','traits'
    ];
    public function PJ(){
        return $this->hasMany('App\PJ');
    }
}
