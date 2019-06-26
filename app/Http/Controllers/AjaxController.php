<?php

namespace App\Http\Controllers;

use App\Model\Compte;
use App\Model\Eleve;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function compte_montant(Request $request){

            $compte = Compte::findOrfail($request->val);

            $eleves = Eleve::mine()->whereHas('versement', function ($q) use ($request) {
                return $q->where('eleve_id', $request->id_eleve );
            })->with('versement')->get();

            foreach ($eleves as $item){

                $eleve[]=[
                    'id' => $item->id,
                    'nom' => $item->nom,
                    'prenom' => $item->prenom,
                ];

                $data_montant = 0;

                for ($y =0; $y < count($item->versement); $y++){
                    $data_montant = $item->versement[$y]->montant + $data_montant;
                    $eleve[0]['montantdverse'] = $data_montant;
                    $eleve[0]['restepaye'] = $item->versement[$y]->resteapayer;
                }

            }

            $eleve[0]['montantapayer']= $compte->montant;


        return response()->json($eleve[0]);

    }
}
