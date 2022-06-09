<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Spell;
use App\Weapon;
use App\PJ;
use App\Background;
use App\Race;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class FiltroAPIController extends Controller
{
    public $successStatus = 200;


    public function spellGlobalList() {
        
        $globalSpells = Spell::All();

        return response()->json(['success' => $globalSpells], $this->successStatus);
        
    }
    public function weaponGlobalList() {
        
        $globalWeapons = Weapon::All();

        return response()->json(['success' => $globalWeapons], $this->successStatus);
        
    }
    public function PJGlobalList() {
        
        $globalPJ = PJ::All();

        return response()->json(['success' => $globalPJ], $this->successStatus);
        
    }
    public function BackgroundGlobalList() {
        
        $globalBackground = Background::All();

        return response()->json(['success' => $globalBackground], $this->successStatus);
        
    }
    public function RaceGlobalList() {
        
        $globalRace = Race::All();

        return response()->json(['success' => $globalRace], $this->successStatus);
        
    }
    public function CategoryGlobalList() {
        
        $globalCategory = Category::All();

        return response()->json(['success' => $globalCategory], $this->successStatus);
        
    }
    public function createPJ(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'level' => 'required',
            'alignment' => 'required',
            'STR' => 'required',
            'DEX' => 'required',
            'CON' => 'required',
            'INTE' => 'required',
            'WIS' => 'required',
            'CHARI' => 'required',
            'user_id' => 'required',
            'background_id' =>'required',
            'race_id' =>'required',
            'category_id' =>'required',
        
            
        ]);

        if($validator->fails()){
            return response()->json(['error' => $validator->errors()], 401);
        }

       
       
      
        $input = $request->all();
        
        $pjs = PJ::create($input);

        
        $success['name'] = $pjs->name;
        $success['level'] = $pjs->level;
        $success['alignment'] = $pjs->alignment;
        $success['email'] = $pjs->email;
        $success['STR'] = $pjs->STR;
        $success['DEX'] = $pjs->DEX;
        $success['CON'] = $pjs->CON;
        $success['INTE'] = $pjs->INTE;
        $success['WIS'] = $pjs->WIS;
        $success['CHARI'] = $pjs->CHARI;
        $success['user_id'] = $pjs->user_id;
        $success['background_id'] = $pjs->background_id;
        $success['race_id'] = $pjs->race_id;
        $success['category_id'] = $pjs->category_id;

        return response()->json(['success' => $success], $this->successStatus);

        
    }
    public function deletePJ(Request $request) {
        

        PJ::destroy($request['id']);
        return response()->json(['success' => $request], $this->successStatus);


        
        
    }
}
