<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Piani extends Model {

    protected $table = 'piani';

    protected $primaryKey = 'titolo';
    public $incrementing = false; 
    protected $keyType = 'string'; 

    public $timestamps = false; 

    protected $fillable = [
        'titolo',
        'immagine'
    ];

    
    public function utenti() {
        return $this->hasMany('App\Models\Utente', 'piano', 'titolo');
    }
}

?>