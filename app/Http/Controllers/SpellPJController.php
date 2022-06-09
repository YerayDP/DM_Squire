<?php

namespace App\Http\Controllers;

use App\Spell;
use App\Spell_PJ;
use App\PJ;
use Illuminate\Http\Request;

class SpellPJController extends Controller
{
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    
   public function index()
   {
    $spell_list = Spell_PJ::all();
    $pjs = PJ::all();
    $spells = Spell::all();
 
    
    return view('spell_list.index',compact('spell_list'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    
    $spell_list = Spell_PJ::all();
    $pjs = PJ::all();
    $spells = Spell::all();
    return view('spell_list.create',compact('spell_list','pjs','spells'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
    Spell_PJ::create($request->all());
    return redirect('spell_list')->with('status', 'Spell List created!');
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
    
    $pjs = PJ::all();
    $spells = Spell::all();
    $spell_list = Spell_PJ::find($id);

    return view('spell_list.edit',compact('spell_list','pjs','spells'));
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
   
   
    Spell_PJ::find($id)->update($request->all());

    return redirect('spell_list')->with('status', 'Spell List updated!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
    Spell_PJ::destroy($id);
      return redirect('spell_list')->with('status', 'Spell List deleted!');
   }
}