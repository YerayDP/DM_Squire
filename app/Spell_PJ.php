<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spell_PJ extends Model
{
    protected $table = 'spells_PJ';
    
    protected $fillable = [
        'spells_id','PJ_id'
    ];
    public function PJ(){
        return $this->belongsTo('App\PJ','PJ_id');
    }
    public function Spells(){
        return $this->belongsTo('App\Spell','spells_id');
    }
}
