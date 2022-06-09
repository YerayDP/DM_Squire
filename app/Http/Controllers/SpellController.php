<?php

namespace App\Http\Controllers;

use App\Category;
use App\Spell;
use Illuminate\Http\Request;

class SpellController extends Controller
{
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    
   public function index()
   {
    $spells = Spell::all();
    
    return view('spells.index',compact('spells'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    $spells = Spell::all();
    $categories = Category::all();
    return view('spells.create',compact('spells','categories'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
   
    $M=implode(',',$request['componentsT']);
    $request['components'] = $M.'('.$request['Cdescription'].')';
    $N = (string)$request['N'];
    $D = (string)$request['D']; 
    $request['spellDMG'] = $N.$D;
    $NAHL = (string)$request['NAHL'];
    $DAHL = (string)$request['DAHL']; 
    $request['spellAHL'] = $NAHL.$DAHL;
    $request['range'] = $request['range'].'ft';
    if($request['spellList']!=null){
        $request['spellList'] = implode(',', $request->spellList);
    }
    
 
    $this->validate($request,[ 'name'=>'required' ,'school'=>'required', 
    'spellDMG' => 'required','spellAHL' => 'required','spellList' => 'required','level'=> 'required', 'casting_time'=> 'required','range' => 'required'
    ,'components' => 'required','duration' => 'required','description' => 'required']);
   
    Spell::create($request->all());
    return redirect('spells')->with('status', 'Spell created!');
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
       
    $spells = Spell::find($id);
    $N = $spells -> spellDMG;
    $N=explode('d',$N);
    $N=$N[0];
    $NAHL = $spells -> spellAHL;
    $NAHL=explode('d',$NAHL);
    $NAHL=$NAHL[0];
    $w = explode('f',$spells['range']);
    $spells['range']=$w[0];
    $categories = Category::all();
    return view('spells.edit',compact('spells','N','NAHL','categories'));
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
    $M=implode(',',$request['componentsT']);
    $request['components'] = $M.'('.$request['Cdescription'].')';
    $N = (string)$request['N'];
    $D = (string)$request['D']; 
    $request['spellDMG'] = $N.$D;
    $NAHL = (string)$request['NAHL'];
    $DAHL = (string)$request['DAHL']; 
    $request['spellAHL'] = $NAHL.$DAHL;
    $request['range'] = $request['range'].'ft';
    if($request['spellList']!=null){
        $request['spellList'] = implode(',', $request->spellList);
    }
    return redirect('spells')->with('status', 'Spell updated!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       Spell::destroy($id);
      return redirect('spells')->with('status', 'Spell deleted!');
   }


  
}
