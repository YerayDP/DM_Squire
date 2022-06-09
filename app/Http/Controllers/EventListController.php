<?php

namespace App\Http\Controllers;

use App\Event;
use App\Event_List;
use App\User;
use Illuminate\Http\Request;

class EventListController extends Controller
{
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    
   public function index()
   {
    $events_list = Event_List::all();
    $users = User::all();
    $events = Event::all();
 
    
    return view('event_list.index',compact('events_list'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    
    $events_list = Event_List::all();
    $users = User::all();
    $events = Event::all();
    return view('event_list.create',compact('events_list','users','events'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {

    $this->validate($request,[ 'rate'=>'required', 'commentary'=>'nullable']);
    Event_List::create($request->all());
    return redirect('event_list')->with('status', 'Event created!');
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
    
    $users = User::all();
    $events = Event::all();
    $events_list = Event_List::find($id);

    return view('event_list.edit',compact('events_list','users','events'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
   
   
    Event_List::find($id)->update($request->all());

    return redirect('event_list')->with('status', 'Event updated!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
    Event_List::destroy($id);
      return redirect('event_list')->with('status', 'Event deleted!');
   }
}