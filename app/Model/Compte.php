<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{

    protected $table = 'comptes';

    public $timestamps = true;

    protected $fillable = array('user_id', 'libelle','montant','date_debut','date_fin');


    public function scopeMine( Builder $query ) {
        return $query->where( 'user_id', auth()->id() );
    }

    public function versement()
    {
        return $this->hasMany(Versement::class);
    }
}
