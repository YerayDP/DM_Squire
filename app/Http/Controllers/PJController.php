<?php

namespace App\Http\Controllers;
use File;

use App\PJ;

use App\User;

use App\Background;

use App\Race;

use App\Category;

use Illuminate\Http\Request;

class PJController extends Controller
{
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    
   public function index()
   {
    $users = User::all();
    $backgrounds = Background::all();
    $categories = Category::all();
    $races = Race::all();
    $PJs = PJ::all();
    return view('PJs.index',compact('PJs'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    $users = User::all();
    $backgrounds = Background::all();
    $categories = Category::all();
    $races = Race::all();
    $PJs = PJ::all();
    return view('PJs.create',compact('PJs','users','backgrounds','categories','races'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
    if($request['inspiration']=='on'){
    $request['inspiration']='1';
    }
    else{
    $request['inspiration']='1';   
    }
 
    $this->validate($request,[ 'name'=>'required','level'=> 'required','alignment' => 'required'
    ,'inspiration' => 'nullable','STR' => 'required','DEX' => 'required','CON' => 'required','INTE' => 'required',
    'WIS' => 'required','CHARI' => 'required']);
   
    PJ::create($request->all());
    return redirect('PJs')->with('status', 'PJ created!');
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
       
    $PJs = PJ::find($id);
    $N = $PJs -> ASI;
    $N=explode(',',$N);
    $N=$N[0];
    $users = User::all();
    $backgrounds = Background::all();
    $categories = Category::all();
    $races = Race::all();

    return view('PJs.edit',compact('PJs','N','users','backgrounds','categories','races'));
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
    if( $request['ASI']!=null){
        $request['ASI']=implode(',',$request['ASI']);
    }
    
    $request['speed'] = $request['speed'].'ft';
    
    PJ::find($id)->update($request->all());

    return redirect('PJs')->with('status', 'PJ updated!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      PJ::destroy($id);
      return redirect('PJs')->with('status', 'PJ deleted!');
   }


  
}
