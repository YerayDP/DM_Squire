<?php

namespace App\Http\Controllers;

use App\Background;
use Illuminate\Http\Request;

class BackgroundController extends Controller
{
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    
   public function index()
   {
    $backgrounds = Background::all();
    
    return view('Background.index',compact('backgrounds'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    $background = Background::all();
    
    return view('Background.create',compact('background'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
    if ($request['skills_prof'] != null){
        $request['skills_prof'] = implode(',', $request->skills_prof);
       }
    $this->validate($request,[ 'name'=>'required', 'skills_prof'=>'nullable', 
    'tools_prof'=>'nullable', 'languajes'=>'nullable', 'SE_prof'=>'nullable', 'traits'=>'required']);
    Background::create($request->all());
    return redirect('background')->with('status', 'Background created!');
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
       
    $backgrounds = Background::find($id);
    return view('Background.edit',compact('backgrounds'));
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
     if ($request['skills_prof'] != null){
        $request['skills_prof'] = implode(',', $request->skills_prof);
       }
       Background::find($id)->update($request->all());

      return redirect('background')->with('status', 'Background updated!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       Background::destroy($id);
      return redirect('background')->with('status', 'Background deleted!');
   }


  
}
