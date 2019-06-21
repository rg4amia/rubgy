<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model 
{

    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable = array('user_id', 'libelle');

    public function scopeMine( Builder $query ) {
        return $query->where( 'user_id', auth()->id() );
    }
}
