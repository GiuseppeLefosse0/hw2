<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Utente;

class ControllerLogin extends Controller {

    public function index() {
        if (session('username') != null) {
            return redirect("account");
        } else {
            return view('login')
                ->with('csrf_token', csrf_token());
        }
     }

    public function checkLogin() {
        $request =request();
        $user = Utente::where('username', $request->username)->first();

        
        if ($user !== null && password_verify($request->password, $user->password)) {
            Session::put('username', $user->username);
            return redirect('account');
        } else {
            return redirect('login')->withInput();
        }
    }

    public function checkCredenziali($username, $password) {
        $user = Utente::where('username', $username)->first();

        if ($user === null || !password_verify($password, $user->password)) {
            return 'credenziali_sbagliate';
        } else {
            return 'ok';
        }
    }

}
