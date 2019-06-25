<?php
/**
 * Created by PhpStorm.
 * User: Achija
 * Date: 10/13/17
 * Time: 6:28 AM
 */

//use App\Models\Campaign;
/*use Abraham\TwitterOAuth\TwitterOAuth;
use App\Helpers\EbayFinding;
use App\Models\Report;
use App\Account;*/
/*use GuzzleHttp\Client;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;
*/

use App\Model\Anneescolaire;
use App\Model\Compte;

/**
 * @param $mediaId
 * @return \Spatie\MediaLibrary\Media
 */

    if( ! function_exists('selected_annee') ) {
        function selected_annee(){
            $selected = Anneescolaire::mine()->where('platform', 'academic')->where('active', true)->first();
            return $selected->id;
        }
    }

    if( ! function_exists('list_academic') ) {
        function list_academic(){
            $selected = Anneescolaire::mine()->where('platform', 'academic')->where('active', true)->first();
            $academics = Anneescolaire::pluck('anneescolaire','id')->prepend($selected->anneescolaire);
            return $academics;
        }
    }
    if( ! function_exists('create_compte') ) {
        function create_compte(){

            $buttom = "<a href=\"{{route('compte.store')}}\" class=\"btn btn-primary\" <i class=\"feather icon-plus\"></i> Creer un Compte</a>";
            $lst_compte = Compte::mine()->get();

            if (count($lst_compte) ===0 ){
                return $buttom;
            }

        }
    }