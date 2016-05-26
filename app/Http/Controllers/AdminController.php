<?php
/**
 * Created by PhpStorm.
 * User: Akim
 * Date: 03/05/2016
 * Time: 13:31
 */
namespace App\Http\Controllers;

use App\Carousel;
use App\Faicon;
use App\Menu;
use App\Post;

class AdminController extends Controller
{

    /**
     * Nous définissons les variables nécessaires pour afficher notre page correctement.
     * Retourne la dashboard avec tous les posts crées suivant l'ordre décroissant
     * @return mixed
     */
    public function getPanelAdmin ()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $carousels = Carousel::orderBy('created_at', 'desc')->get();
        $menus = Menu::orderBy('created_at', 'desc')->get();
        $faicons = Faicon::orderBy('created_at', 'desc')->get();
        return view('admin.pl_Admin', [
            'posts' => $posts,
            'carousels' => $carousels,
            'menus' => $menus,
            'faicons' => $faicons,
        ]);
    }
}