<?php 

namespace App\Http\Controllers;

use App\Model\Categorie;
use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Redirect;
    use MercurySeries\Flashy\Flashy;

    class CategorieController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $categories = Categorie::paginate(5);
    return view('categorie.index',compact('categories'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('categorie.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $data = $request->all();
    $data['user_id'] = Auth::id();

    $categorie = Categorie::create($data);

    if ($categorie){

        Flashy::success('Votre categorie Ajouté avec succès');

        return Redirect::route('categorie.index');
    }
    else{

        Flashy::error("Une erreur est survenue l'hors de l'ajout de cette categorie");
        return Redirect::route('categorie.create');
    }

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
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
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
