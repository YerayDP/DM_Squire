<?php

namespace App\Http\Controllers;


use App\Race;
use Illuminate\Http\Request;

class RaceController extends Controller
{
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    
   public function index()
   {
    $races = Race::all();
    
    return view('races.index',compact('races'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    $races = Race::all();
    

    return view('races.create',compact('races'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
   
    if( $request['ASI']!=null){
        $request['ASI']=implode(',',$request['ASI']);
    }
    $request['speed'] = $request['speed'].'ft';
   
 
    $this->validate($request,[ 'name'=>'required','ASI'=> 'required','speed' => 'required'
    ,'traits' => 'nullable','proficencies' => 'nullable','languajes' => 'required']);
   
    Race::create($request->all());
    return redirect('races')->with('status', 'Race created!');
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
       
    $races = Race::find($id);
    $N = $races -> ASI;
    $N=explode(',',$N);
    $N=$N[0];
    $w = explode('f',$races['speed']);
    $w=$w[0];
    $races['speed']=$w[0];

    return view('races.edit',compact('races','N','w'));
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
    
    Race::find($id)->update($request->all());

    return redirect('races')->with('status', 'Race updated!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       Race::destroy($id);
      return redirect('races')->with('status', 'Race deleted!');
   }


  
}
