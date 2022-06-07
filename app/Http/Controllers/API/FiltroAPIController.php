<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Spell;
use Illuminate\Support\Facades\Auth;
use Validator;

class FiltroAPIController extends Controller
{
    public $successStatus = 200;


    public function spellGlobalList() {
        
        $globalSpells = Spell::All();

        return response()->json(['success' => $globalSpells], $this->successStatus);
        
    }

}
