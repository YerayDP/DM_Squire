<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PJ extends Model
{
    protected $table = 'PJ';

    protected $fillable = [
        'name','user_id','category_id', 'level', 'race_id','background_id','alignment', 
        'inspiration', 'STR', 'DEX', 'CON', 'INTE', 
        'WIS', 'CHARI', 'AC', 'initiative', 'proficency','spells_slots','spells_known','spells_ready'
    ];
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    public function category(){
        return $this->belongsTo('AppCategory','category_id');
    }
    public function race(){
        return $this->belongsTo('App\Race','race_id');
    }
    public function background(){
        return $this->belongsTo('App\Background','background_id');
    }
}
