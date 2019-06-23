<?php 

namespace App\Http\Controllers;

use App\Model\Categorie;
    use App\Model\Compte;
    use App\Model\Eleve;
    use App\Model\Versement;
    use http\Client\Curl\User;
    use Illuminate\Http\Request;

class VersementController extends Controller 
{
    private $id_eleve;

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $eleve_vers = Eleve::paginate(5);
      return view('versement.index', compact('eleve_vers'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
      $this->id_eleve = $id;


      $eleves = Eleve::whereHas('versement', function ($q){
          return $q->where('eleve_id', $this->id_eleve);
      })->with('versement')->get();

      foreach ($eleves as $item){

          $eleve[]=[
              'id' => $item->id,
              'nom' => $item->nom,
              'prenom' => $item->prenom,
          ];

          for ($y =0; $y < count($item->versement); $y++){

              $data_montant = 0;
              $data_montant+= $item->versement[$y]->montant;
          }

          foreach ($item->versement as $stam){

              $acompte = 0;
              $acompte = $stam->montant + $acompte;
              $eleve['montant'] = $data_montant;

          }
      }
      //dd($data_montant);
      dd($eleve);

      $compte = Compte::mine()->pluck('libelle','id')->prepend('--Choix Versement--');
      return view('versement.create',compact('eleve','compte'));
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>
