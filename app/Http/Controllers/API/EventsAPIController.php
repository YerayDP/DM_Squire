<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Spell;
use App\Weapon;
use App\PJ;
use App\Background;
use App\Race;
use App\Category;
use App\User;
use App\Event;
use App\Event_List;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;

class EventsAPIController extends Controller
{
    public $successStatus = 200;


    public function getGlobalEvents() {
        

        
        $date = Carbon::now()->subDays(7)->format('Y-m-d');
        $filteredEvents=Event::where('date_end', '>=', $date)->get();
        
        return response()->json(['success' => $filteredEvents], $this->successStatus);
        
    }
    public function createEvents(Request $request) {
        

     
        $input = $request->all();
        
        
        $event = Event_List::create($input);

        $success['user_id'] = $event->user_id;
        $success['event_id'] = $event->event_id;
        $success['rate'] = $event->rate;
        $success['commentary'] = $event->commentary;
       

        return response()->json(['success' => $success], $this->successStatus);
        
    
        
    }
    public function updateEvents(Request $request) {
        $validator = Validator::make($request->all(), [
            'rate' => 'required',
            'commentary' => 'required',
            
        ]);
        if($validator->fails()){
            return response()->json(['error' => $validator->errors()], 401);
        }


        Event_List::where('user_id', $request['user_id'])->where('event_id', $request['event_id'])->first()->update($request->all());


       

        return response()->json(['success' => 'Rated!'], $this->successStatus);

      
        
    }
    public function getGlobalEventsList() {
        
        $filteredEvents=Event_List::all();
        
        
        return response()->json(['success' => $filteredEvents], $this->successStatus);
        
    }
    public function getGlobalInscribed() {
        
        $filteredEvents=Event_List::all();
        
        
        return response()->json(['success' => $filteredEvents], $this->successStatus);
        
    }
    
}
