<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schede extends Model {

    protected $table = 'schede';
    protected $primaryKey='username';
    public $incrementing=false;
    protected $keyType ='string';
    public $timestamps = false;


    protected $fillable = [
        'username',
        'esercizio'
    ];

    public function utente() {
        return $this->hasMany('App\Models\Utente', 'username', 'username');
    }

    public function esercizio() {
        return $this->belongsToMany('App\Models\ListaEsercizi', 'esercizio', 'titolo');
    }
}

?>