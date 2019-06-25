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

    public function __construct()
    {
        $this->middleware('auth');
    }


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


      $eleves = Eleve::mine()->whereHas('versement', function ($q){
          return $q->where('eleve_id', $this->id_eleve);
      })->with('versement')->get();

        if((count($eleves) === 0) ===false){

          foreach ($eleves as $item){

              $eleve[]=[
                  'id' => $item->id,
                  'nom' => $item->nom,
                  'prenom' => $item->prenom,
              ];

              $data_montant = 0;

              for ($y =0; $y < count($item->versement); $y++){
                  $data_montant = $item->versement[$y]->montant + $data_montant;
                  $eleve[0]['montant'] = $data_montant;
              }

          }

      }else{

          $eleve = Eleve::mine()->findOrfail($this->id_eleve);

          $compte = Compte::mine()->pluck('libelle','id')->prepend('--Choix Versement--');
          return view('versement.newcreate',compact('eleve','compte'));

       }

      //dd($eleve);

      $compte = Compte::mine()->pluck('libelle','id')->prepend('--Choix Versement--');
      return view('versement.create',compact('eleve','compte'));
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request,$id)
  {

    $data = $request->all();

    dd($data);
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
