<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Request;
use Session;
use App\Models\Utente;


class ControllerPlaylists extends Controller {

    
    public function index(){

        $username=session('username');

        if(!isset($username)){
            return redirect('login');
        } else {
            return view('playlists');
        }
    }
    


public function show_spotify()
{
    $request=request();
    if(!Session::has('username')){
        exit;
    }
    $client_id ="";
    $client_secret = "";

    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://accounts.spotify.com/api/token' );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  
    curl_setopt($ch, CURLOPT_POST, 1);
    
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=client_credentials'); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic '.base64_encode($client_id.':'.$client_secret))); 
    $token=json_decode(curl_exec($ch), true);
    curl_close($ch);    

 
    $query = $request->input('query', 'hardworkout');
    $url = 'https://api.spotify.com/v1/search?type=playlist&q='.urlencode($query);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token['access_token'])); 
    $res=curl_exec($ch);
    curl_close($ch);

    return $res;
}

}


?>