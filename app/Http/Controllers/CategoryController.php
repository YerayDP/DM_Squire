<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    
   public function index()
   {
    $categories = Category::all();
    
    return view('categories.index',compact('categories'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    $category = Category::all();
    
    return view('categories.create',compact('category'));
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
       if ($request['ST_prof'] != null){
        $request['ST_prof'] = implode(',', $request->ST_prof);
       }
      
    $this->validate($request,[ 'name'=>'required', 'archetype'=>'required', 'hitdice'=>'required', 'armor_prof'=>'required',  'weapon_prof	'=>'nullable',  'ST_prof'=>'nullable',
    'tools_prof'=>'nullable', 'SE_prof'=>'nullable', 'traits'=>'required']);
    Category::create($request->all());
    return redirect('categories')->with('status', 'Category created!');
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
       
    $categories = Category::find($id);
    return view('categories.edit',compact('categories'));
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
       if ($request['ST_prof'] != null){
        $request['ST_prof'] = implode(',', $request->ST_prof);
       }
      
    
       Category::find($id)->update($request->all());

      return redirect('categories')->with('status', 'Category updated!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       Category::destroy($id);
      return redirect('categories')->with('status', 'Category deleted!');
   }


  
}
