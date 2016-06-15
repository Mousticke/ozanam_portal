<?php
/**
 * Created by PhpStorm.
 * User: Akim
 * Date: 03/05/2016
 * Time: 13:31
 */
namespace App\Http\Controllers;

use App\Carousel;
use App\Classe;
use App\Faicon;
use App\Menu;
use App\Post;
use App\Role;
use App\Timeline;
use App\User;

class AdminController extends Controller
{

    /**
     * Nous définissons les variables nécessaires pour afficher notre page correctement.
     * Retourne la dashboard avec tous les posts crées suivant l'ordre décroissant
     * @return mixed
     */
    public function getPanelAdmin ()
    {
        $timelines = Timeline::orderBy('created_at', 'desc')->get();
        $posts = Post::orderBy('created_at', 'desc')->get();
        $carousels = Carousel::orderBy('created_at', 'desc')->get();
        $menus = Menu::orderBy('created_at', 'desc')->get();
        $faicons = Faicon::orderBy('created_at', 'desc')->get();
        return view('admin.pl_Admin', [
            'timelines' => $timelines,
            'posts' => $posts,
            'carousels' => $carousels,
            'menus' => $menus,
            'faicons' => $faicons,
        ]);
    }

    public function getUsersAdmin ()
    {
        $users = User::orderBy('first_name')->get();
        $classes = Classe::orderBy('id')->get();
        $roles = Role::orderBy('id')->get();
        return view('admin.includes.manageUsers', [
            'users' => $users,
            'classes' => $classes,
            'roles' => $roles,
        ]);
    }
}