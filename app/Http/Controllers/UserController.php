<?php
/**
 * Created by PhpStorm.
 * User: Akim
 * Date: 03/05/2016
 * Time: 13:31
 */
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function login($url,$data){
        $fp = fopen("cookie.txt", "w");
        fclose($fp);
        $login = curl_init();
        curl_setopt($login, CURLOPT_COOKIEJAR, "cookie.txt");
        curl_setopt($login, CURLOPT_COOKIEFILE, "cookie.txt");
        curl_setopt($login, CURLOPT_TIMEOUT, 40000);
        curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($login, CURLOPT_URL, $url);
        curl_setopt($login, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($login, CURLOPT_POST, TRUE);
        curl_setopt($login, CURLOPT_POSTFIELDS, $data);
        ob_start();
        return curl_exec ($login);
        ob_end_clean();
        curl_close ($login);
        unset($login);
    }
    public function getCahier(){
        return redirect()->away($this->login('http://ozanet.fr/cdt/authentification/auth.php', 'md5=82b1f4abc1130b481dac6baccad68a97&nom_prof=DESCHAMPS&passe=&Submit2=Valider'));
    }

    /**
     * On déconnecte l'utilisateur. Sa session est vide. On le redirie vers l'accueil
     * @return mixed
     */
    public function getLogout ()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    
    /**
     * Formulaire d'inscription
     * @param Request $request
     * @return mixed
     */
    public function postSignUp (Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'first_name' => 'required|max:120',
            'password' => 'required|min:4'
        ]);

        //Passer les data du sign up
        $email = $request['email'];
        $first_name = $request['first_name'];

        //hash password
        $password = bcrypt($request['password']);

        //Create a new User
        $user = new User();
        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;

        //Save the user
        $user->save();

        //Protect the dashboard
        Auth::login($user);

        return redirect()->route('dashboard');
    }

    /**
     * Formulaire de connexion
     * @param Request $request
     * @return mixed
     */
    public function postSignIn (Request $request)
    {
        /**
         * If the login is a success, we are redirected in the dashboard. Otherwise, we get back in signin form
         */

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);


        if (Auth::attempt([
            'email' => $request['email'],
            'password' => $request['password']
        ])
        ) {



            return redirect()->route('dashboard');
        } else
            return redirect()->back();
    }

}


