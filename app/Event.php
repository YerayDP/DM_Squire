<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    //SE = Start Equipment
    //ST = Saving Throws
    protected $fillable = [
        'name','info','date_start','date_end'
    ];
    public function Event_List(){
        return $this->hasMany('App\Event_List');
    }
}
