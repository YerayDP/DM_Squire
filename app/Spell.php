<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spell extends Model
{
    protected $table = 'spells';

    protected $fillable = [
        'name','school', 'level', 'casting_time','range','components', 
        'duration', 'description', 'spellDMG', 'spellAHL', 'spellList'
    ];
    public function Spell_PJ(){
        return $this->hasMany('App\Spell_PJ');
    }
}
