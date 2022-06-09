<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event_List extends Model
{
    protected $table = 'event__lists';
    
    protected $fillable = [
        'event_id','user_id','rate','commentary'
    ];
    public function User(){
        return $this->belongsTo('App\User','user_id');
    }
    public function Event(){
        return $this->belongsTo('App\Event','event_id');
    }
}
