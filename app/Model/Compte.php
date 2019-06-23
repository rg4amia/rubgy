<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{

    protected $table = 'comptes';

    public $timestamps = true;

    protected $fillable = array('user_id', 'libelle','montant','date_debut','date_fin', 'academic_id');

    protected $casts = [
        'user_id'            => 'integer',
        'libelle'               => 'string',
        'platform'           => 'string',
        'montant'           => 'integer',
        'academic_id'            => 'integer',
    ];


    public function scopeMine(Builder $query)
    {
        return $query->where('academic_id', selected_annee());
    }

    public function versement()
    {
        return $this->hasMany(Versement::class);
    }
}
