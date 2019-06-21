<?php

namespace App\Http\Controllers;

use App\Model\Compte;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function compte_montant(Request $request){

        $montant = Compte::where('id',$request->val)->get();
        return response()->json($montant);
    }
}
