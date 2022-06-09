<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    
   public function index()
   {
    $events = Event::all();
    
    return view('event.index',compact('events'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    $events = Event::all();
    
    return view('event.create',compact('events'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
    $date= Carbon::now();
    $this->validate($request,[ 'name'=>'required', 'info'=>'required' , 'date_start'=> 'required|date|after_or_equal:today','date_end'=> 'required|date|after_or_equal:date_start',]);
    Event::create($request->all());
    return redirect('event')->with('status', 'Event created!');
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
       
    $events = Event::find($id);

    return view('event.edit',compact('events'));
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
   
   
    Event::find($id)->update($request->all());

    return redirect('event')->with('status', 'Event updated!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       Event::destroy($id);
      return redirect('event')->with('status', 'Event deleted!');
   }


  
}
