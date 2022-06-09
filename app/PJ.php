<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PJ extends Model
{
    protected $table = 'PJ';
   
    protected $fillable = [
        'name','user_id','category_id', 'level', 'race_id','background_id','alignment', 
        'inspiration', 'STR', 'DEX', 'CON', 'INTE', 
        'WIS', 'CHARI'
    ];
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }
    public function race(){
        return $this->belongsTo('App\Race','race_id');
    }
    public function background(){
        return $this->belongsTo('App\Background','background_id');
    }
    public function Item_PJ(){
        return $this->hasMany('App\Item_PJ');
    }
    public function Spell_PJ(){
        return $this->hasMany('App\Spell_PJ');
    }
    public function Weapon_PJ(){
        return $this->hasMany('App\Weapon_PJ');
    }
    
}
