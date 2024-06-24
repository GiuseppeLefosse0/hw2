<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Utente extends Model {

    protected $table='utenti';

    protected $primaryKey='username';
    public $incrementing=false;
    protected $keyType ='string';

    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
        'email',
        'nome',
        'cognome',
        'piano'
    ];

    public function schede() {
        return $this->belongsTo('App\Models\Schede', 'username', 'username');
    }
    public function piani() {
        return $this->belongsTo('App\Models\Piani', 'titolo', 'piano');
    }
}

?>