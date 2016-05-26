<?php
/**
 * Created by PhpStorm.
 * User: Akim
 * Date: 03/05/2016
 * Time: 13:31
 */
namespace App\Http\Controllers;

use App\Carousel;
use App\Menu;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HeaderController extends Controller
{

    /**
     * On retourne le header avec les variables nécessaire pour un affichage correcte
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getHeader ()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $carousels = Carousel::orderBy('created_at', 'desc')->get();
        $menus = Menu::orderBy('created_at', 'desc')->get()->where('visibility', 0);
        return view('header', [
            'posts' => $posts,
            'carousels' => $carousels,
            'menus' => $menus,
        ]);
    }
}