<?php

namespace App\Http\Controllers;

use App\Weapon;
use App\Weapon_PJ;
use App\PJ;
use Illuminate\Http\Request;

class WeaponPJController extends Controller
{
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    
   public function index()
   {
    $weapon_list = Weapon_PJ::all();
    $pjs = PJ::all();
    $Weapons = Weapon::all();
 
    
    return view('weapon_list.index',compact('weapon_list'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    
    $weapon_list = Weapon_PJ::all();
    $pjs = PJ::all();
    $weapons = Weapon::all();
    return view('weapon_list.create',compact('weapon_list','pjs','weapons'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
    Weapon_PJ::create($request->all());
    return redirect('weapon_list')->with('status', 'Weapon List created!');
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
    $weapons = Weapon::all();
    $weapon_list = Weapon_PJ::find($id);

    return view('weapon_list.edit',compact('weapon_list','pjs','weapons'));
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
   
   
    Weapon_PJ::find($id)->update($request->all());

    return redirect('weapon_list')->with('status', 'Weapon List updated!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
    Weapon_PJ::destroy($id);
      return redirect('weapon_list')->with('status', 'Weapon List deleted!');
   }
}