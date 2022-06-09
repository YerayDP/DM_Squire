<?php

namespace App\Http\Controllers;

use App\Item;
use App\Item_PJ;
use App\PJ;
use Illuminate\Http\Request;

class ItemPJController extends Controller
{
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    
   public function index()
   {
    $item_list = Item_PJ::all();
    $pjs = PJ::all();
    $items = Item::all();
 
    
    return view('item_list.index',compact('item_list'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    
    $item_list = Item_PJ::all();
    $pjs = PJ::all();
    $items = Item::all();
    return view('item_list.create',compact('item_list','pjs','items'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
    Item_PJ::create($request->all());
    return redirect('item_list')->with('status', 'item List created!');
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
    $items = Item::all();
    $item_list = Item_PJ::find($id);

    return view('item_list.edit',compact('item_list','pjs','items'));
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
   
   
    Item_PJ::find($id)->update($request->all());

    return redirect('item_list')->with('status', 'item List updated!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
    Item_PJ::destroy($id);
      return redirect('item_list')->with('status', 'item List deleted!');
   }
}