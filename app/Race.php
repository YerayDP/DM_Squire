<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $table = 'races';

    protected $fillable = [
        'name','ASI', 'speed','traits','proficencies', 'languajes'
    ];
    public function PJ(){
        return $this->hasMany('App\PJ');
    }
}
