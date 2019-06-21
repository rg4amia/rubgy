<?php 

namespace App\Http\Controllers;

    use App\Model\Categorie;
    use App\Model\Eleve;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\File;
    use Illuminate\Support\Facades\Input;
    use Illuminate\Support\Facades\Storage;
    use MercurySeries\Flashy\Flashy;
    use phpDocumentor\Reflection\Types\Compound;

    class EleveController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
        $eleves = Eleve::paginate(5);
        return view('eleve.index', compact('eleves'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      $categorie = Categorie::pluck('libelle','id');
    return view('eleve.create', compact('categorie'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

    $this->validate($request, [
          /*'photo' => 'image|min:3000'*/
      ]);

      // Get image file
      $file = $request->file('photo');
      // Make a image name based on user name and current timestamp
      $filename = str_slug($request->input('nom')).'_' . time() . '.' . $file->getClientOriginalExtension();
      $path = 'photos';

      if(Storage::disk('uploads')->put($path.'/'.$filename,  File::get($file))) {

          $input['categorie_id'] = $request->categorie;
          $input['user_id'] = Auth()->user()->id;
          $input['nom'] = $request->nom;
          $input['prenom'] = $request->prenom;
          $input['date_naissance'] = $request->date_naissance;
          $input['nom_parent'] = $request->nom_parent;
          $input['contact'] = $request->contact;
          $input['email'] = $request->email;
          $input['groupe_sanguin'] = $request->groupe_sanguin;
          $input['photo'] = $filename;
          $input['cm'] = $request->cm;
          $input['pj'] = $request->pj;

          if ($eleve = Eleve::create($input)){

              Flashy::success('Eleve Ajouté avec succès');

              return redirect()->route('eleve.index');
          }else{
              Flashy::error("Erreur c'est produite l'hors de l'ajout");
              return back();
          }
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
