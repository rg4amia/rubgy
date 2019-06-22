<?php

namespace App\Http\Controllers;

use App\Model\Anneescolaire;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class AnneescolaireController extends Controller
{
    public function SetAcademic(Request $request){

        $selectedAcademic = Anneescolaire::mine()->where('platform', 'academic')->where('active', true)->first();

        if ($selectedAcademic)
        {
            $selectedAcademic->active = false;
            $selectedAcademic->save();
        }

        $academic = Anneescolaire::find($request->id);
        $academic->active = true;
        $academic->save();

        Flashy::success('Annee Academic Selectionné avec succès');
        return response()->json('success');
    }
}
