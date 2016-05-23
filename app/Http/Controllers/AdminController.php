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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    /**
     * Retourne la dashboard avec tous les posts crées suivant l'ordre décroissant
     * @return mixed
     */
    public function getPanelAdmin ()
    {

        //fetch all post with order

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

    public function getDeletePostAdmin ($post_id)
    {

        /*Alternative :
         * $post = Post::find($post_id)->first();
         */

        //chercher un unique post à supprimer par son id
        $post = Post::where('id', $post_id)->first();
        $post->delete();

        return redirect()->route('pl_admin')->with(['message' => 'Post effacé']);
    }

    public function getGestionActualite ()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('admin.includes.manageActualite', [
            'posts' => $posts,
        ]);

    }

    public function getGestionCarousel ()
    {
        $carousels = Carousel::orderBy('created_at', 'desc')->get();
        return view('admin.includes.manageCarousel', [
            'carousels' => $carousels,
        ]);

    }

    public function postEditPostAdmin (Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        $post = Post::find($request['postId']);
        $post->body = $request['body'];
        $post->update();
        return response()->json(['new_body' => $post->body], 200);
    }

    public function postEditMenuAdmin (Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'link' => 'max:520',
        ]);

        $menu = Menu::find($request['postId']);
        $menu->name = $request['name'];
        $menu->link = $request['link'];
        $menu->update();
        return response()->json(['new_name' => $menu->name], 200);
    }


}