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

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->route('dashboard');
        } else
            return redirect()->back();
    }

}


