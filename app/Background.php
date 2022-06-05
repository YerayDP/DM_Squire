<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    protected $table = 'backgrounds';
    //SE = Start Equipment
    //ST = Saving Throws
    protected $fillable = [
        'name','skills_prof','tools_prof','languajes'
        ,'SE_prof', 'traits'
    ];
    public function PJ(){
        return $this->hasMany('App\PJ');
    }
}
