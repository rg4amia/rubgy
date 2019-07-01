<?php

namespace App\Http\Controllers\Imprime;

use App\Model\Eleve;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImprimeController extends Controller
{
    //
    public $id_eleve;

    public function getImprime($id){

        $this->id_eleve = $id;

        $eleves = Eleve::mine()->whereHas('versement', function ($q){
            return $q->where('eleve_id', $this->id_eleve);
        })->with('versement')->get();

        if((count($eleves) === 0) ===false) {

            foreach ($eleves as $item) {

                $eleve[] = [
                    'id' => $item->id,
                    'nom' => $item->nom,
                    'prenom' => $item->prenom,
                    'date_naissance' => $item->date_naissance,
                    'nom_parent' => $item->nom_parent,
                    'contact' => $item->contact,
                    'email' => $item->email,
                    'groupe_sanguin' => $item->groupe_sanguin,
                    'photo' => $item->photo,
                    'cm' => $item->cm,
                    'pj' => $item->pj,
                ];

                $data_montant = 0;
                $data_restemontant = 0;

                for ($y = 0; $y < count($item->versement); $y++) {
                    $data_montant = $item->versement[$y]->montant + $data_montant;
                    $eleve[0]['montant'] = $data_montant;
                    $data_restemontant = $item->versement[$y]->resteapayer + $data_restemontant;
                    $eleve[0]['restemontant'] = $data_restemontant;
                    $eleve[0][''] = $data_restemontant;
                }

            }
            dd( $eleve[0]);

            // Fetch all customers from database
            $data = Customer::get();
            // Send data to the view using loadView function of PDF facade
            $pdf = PDF::loadView('pdf.customers', $data);
            // If you want to store the generated pdf to the server then you can use the store function
            $pdf->save(storage_path() . '_filename.pdf');
            // Finally, you can download the file using download function
            return $pdf->download('customers.pdf');


        }

    }
}
