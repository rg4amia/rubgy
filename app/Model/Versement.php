<?php

    namespace App\Model;



use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Versement extends Model 
{

    protected $table = 'versements';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('montant', 'user_id', 'eleve_id','compte_id', 'academic_id', 'resteapayer');

    protected $casts = [
        'user_id'            => 'integer',
        'eleve_id'            => 'integer',
        'compte_id'               => 'integer',
        'platform'           => 'string',
        'montant'           => 'integer',
        'academic_id'            => 'integer',
        'resteapayer'            => 'string',
    ];

    public function scopeMine(Builder $query)
    {
        return $query->where('academic_id', selected_annee());
    }

    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }

    public function compte()
    {
        return $this->belongsTo(Compte::class);
    }
}
