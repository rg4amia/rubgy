<?php
    namespace App;

use App\Model\Anneescolaire;

if( ! function_exists('selected_annee') ) {
function selected_annee(){
$selected = Anneescolaire::mine()->where('platform', 'academique')->where('selected', true)->first();
return $selected->id;
}
}