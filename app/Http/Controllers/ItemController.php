<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    
   public function index()
   {
    $items = Item::all();
    
    return view('items.index',compact('items'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    $items = Item::all();
    
    return view('items.create',compact('items'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
    
    
    $request['weight'] = $request['weight'].'kg';
    $this->validate($request,[ 'name'=>'required', 'weight'=>'required' ,'AC'=>'required']);
    Item::create($request->all());
    return redirect('items')->with('status', 'Item created!');
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
       
    $items = Item::find($id);
   
    $w = explode('k',$items['weight']);
    $items['weight']=$w[0];

    return view('items.edit',compact('items'));
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
   
    $request['weight'] = $request['weight'].'kg';
    Item::find($id)->update($request->all());

    return redirect('items')->with('status', 'Item updated!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       Item::destroy($id);
      return redirect('items')->with('status', 'Item deleted!');
   }


  
}
