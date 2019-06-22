<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model 
{

    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable = array('user_id', 'libelle', 'designation', 'academic_id');


    public function scopeMine(Builder $query)
    {
        return $query->where('academic_id', selected_annee());
    }


}
