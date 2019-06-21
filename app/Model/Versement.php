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
    protected $fillable = array('montant', 'user_id', 'eleve_id');

    public function scopeMine( Builder $query ) {
        return $query->where( 'user_id', auth()->id() );
    }

    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }
}
