<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\Utente;
use App\Models\Piani;


class ControllerIndex extends Controller {

    
    public function index(){

        $username=session('username');

        if(!isset($username)){
            return redirect('login');
        } else {
            return view('index');
        }
    }

    public function inizializza(){
        return Piani::all();       
    }

    public function inserisciPiano($piano){

        $username=session('username');
        $user=Utente::where('username', $username)->first();
        $user->piano=$piano;
        $user->save();
        return 'ok';

    }

}


?>