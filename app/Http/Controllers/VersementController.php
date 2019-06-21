<?php 

namespace App\Http\Controllers;

use App\Model\Categorie;
    use App\Model\Compte;
    use App\Model\Eleve;
    use http\Client\Curl\User;
    use Illuminate\Http\Request;

class VersementController extends Controller 
{

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
      $eleve = Eleve::findOrfail($id);
      $compte = Compte::pluck('libelle','id');
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
