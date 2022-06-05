<?php

namespace App\Http\Controllers;

use App\Weapon;
use Illuminate\Http\Request;

class WeaponController extends Controller
{
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    
   public function index()
   {
    $weapons = Weapon::all();
    
    return view('weapons.index',compact('weapons'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    $weapons = Weapon::all();
    
    return view('weapons.create',compact('weapons'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
    
    $N = (string)$request['N'];
    $D = (string)$request['D']; 
    $request['DMG'] = $N.$D;
    $request['weight'] = $request['weight'].'kg';
    $this->validate($request,[ 'name'=>'required', 'weight'=>'required' ,'properties'=>'required', 
    'DMG' => 'required','type'=>'required']);
    Weapon::create($request->all());
    return redirect('weapons')->with('status', 'Weapon created!');
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
       
    $weapons = Weapon::find($id);
    $N = $weapons -> DMG;
    $N=explode('d',$N);
    $w = explode('k',$weapons['weight']);
    $weapons['weight']=$w[0];
    $N=$N[0];
    return view('weapons.edit',compact('weapons','N'));
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
    $N = (string)$request['N'];
    $D = (string)$request['D']; 
    $request['DMG'] = $N.$D;
    $request['weight'] = $request['weight'].'kg';
    Weapon::find($id)->update($request->all());

    return redirect('weapons')->with('status', 'Weapon updated!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       Weapon::destroy($id);
      return redirect('weapons')->with('status', 'Weapon deleted!');
   }


  
}
