<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\Utente;
use App\Models\ListaEsercizi;
use App\Models\Schede;


class ControllerScheda extends Controller {

    
    public function index(){

        $username=session('username');

        if(!isset($username)){
            return redirect('login');
        } else {
            return view('scheda');
        }
    }

    public function inizializza(){
        return ListaEsercizi::all();       
    }

    public function inizializza_esercizi_utente(){
        $username=session('username');
        $eserciziUtente=Schede::where('username', $username)->get();
        return $eserciziUtente;
        
    }

    public function aggiungiEsercizio($esercizio){
        $username=session('username');
        $addExercise=new Schede;
        $addExercise->username = $username;
        $addExercise->esercizio = $esercizio;
        $addExercise->save();
    }

    public function rimuoviEsercizio($esercizio){
        $username=session('username');
        $delExercise=Schede::where('username', $username)->where('esercizio', $esercizio);
        $delExercise->delete();
    }

}


?>