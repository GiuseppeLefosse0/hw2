<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListaEsercizi extends Model {

    protected $table = 'ListaEsercizi';

    protected $primaryKey = 'titolo';
    public $incrementing = false;
    protected $keyType = 'string'; 

    public $timestamps = false;

    protected $fillable = [
        'titolo',
        'immagine'
    ];

    
    public function schede() {
        return $this->belongsToMany('App\Models\Schede', 'esercizio', 'titolo');
    }

}

?>