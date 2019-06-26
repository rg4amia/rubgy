<?php

namespace App\Http\Controllers;

use App\Model\Compte;
use App\Model\Eleve;
use App\Model\Versement;
use Illuminate\Http\Request;
use Symfony\Component\Console\Helper\Helper;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $eleves = Eleve::mine()->get();
        $nbre_totaleleve = count($eleves);
        $montant_total_verse = Versement::mine()->sum('montant');
        $compte = Compte::mine()->sum('montant');

        $montan_versement_attente = ($compte * $nbre_totaleleve) - $montant_total_verse;


        return view('home', compact('nbre_totaleleve','montant_total_verse','compte','montan_versement_attente'));
    }
}
