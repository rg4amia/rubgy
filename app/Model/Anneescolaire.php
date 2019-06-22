<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Anneescolaire extends Model
{

    protected $table = 'anneescolaires';
    public $timestamps = true;
    protected $fillable = array('annneescolaire', 'platform', 'datedebut', 'datefin', 'user_id','active');


    public function scopeMine( Builder $query ) {
        return $query->where( 'user_id', auth()->id() );
    }
}
