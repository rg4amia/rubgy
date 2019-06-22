<?php

    namespace App\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Eleve extends Model 
{

    protected $table = 'eleves';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('categorie_id', 'user_id', 'nom', 'prenom', 'date_naissance', 'nom_parent', 'contact', 'email', 'groupe_sanguin', 'photo', 'cm', 'pj', 'academic_id');


    public function scopeMine(Builder $query)
    {
        return $query->where('academic_id', selected_annee());
    }

    public function versement()
    {
        return $this->hasMany(Versement::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}

