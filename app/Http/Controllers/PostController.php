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

class PostController extends Controller
{

    /**
     * Retourne la dashboard avec tous les posts crées suivant l'ordre décroissant
     * @return mixed
     */
    public function getDashboard ()
    {

        //fetch all post with order

        $posts = Post::orderBy('created_at', 'desc')->get();
        $carousels = Carousel::orderBy('created_at', 'desc')->get();
        $menus = Menu::orderBy('created_at', 'desc')->get();
        return view('dashboard', [
            'posts' => $posts,
            'carousels' => $carousels,
            'menus' => $menus,
        ]);
    }

    /**
     * Retourne la dashboard de l'index
     * @return mixed
     */
    public function getDashboardIndex ()
    {

        //fetch all post with order

        $posts = Post::orderBy('created_at', 'desc')->get();
        $carousels = Carousel::orderBy('created_at', 'desc')->get();
        $menus = Menu::orderBy('created_at', 'desc')->get();
        return view('welcome', [
            'posts' => $posts,
            'carousels' => $carousels,
            'menus' => $menus,
        ]);
    }
    /*
        public function getPanel(){
    
            return view('admin.pl_Admin');
        }
    */
    /**
     * Creation et validation de l'actualité
     * @param Request $request
     * @return mixed
     */
    public function postCreatePost (Request $request)
    {

        $this->validate($request, [
            'body' => 'required|max:500'
        ]);
        /*Validation
        * name field
          */
        $post = new Post();
        $post->body = $request['body'];
        $message = 'Il n\' y a une erreur';
        /*Save the post si c'est un succès c'est bon.*/
        if ($request->user()->posts()->save($post)) {
            $message = 'Le post a été ajouté';
        }

        return redirect()->route('admin_actualite')->with(['message' => $message]);
    }

    /**
     * On ne peut supprimer que notre post. Même via l'url, on ne peut pas supprimer si on n'est pas
     * le propriétaire
     * @param $post_id
     * @return mixed
     */
    public function getDeletePost ($post_id)
    {

        /*Alternative :
         * $post = Post::find($post_id)->first();
         */

        //chercher un unique post à supprimer par son id
        $post = Post::where('id', $post_id)->first();
        if (Auth::user() != $post->user) {
            return redirect()->back();
        }
        $post->delete();

        return redirect()->route('dashboard')->with(['message' => 'Post effacé']);
    }

    /**
     * Si on met rien dans le modal, on a une erreur et pas de changement
     * On va corriger ça. De plus, on doit reloader la page. On va modifer le js
     * @param Request $request
     * @return mixed
     */
    public function postEditPost (Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        /**
         * On edite son propre poste. Pas celui des autres
         */
        $post = Post::find($request['postId']);
        if (Auth::user() != $post->user) {
            return redirect()->back();
        }
        $post->body = $request['body'];
        $post->update();
        return response()->json(['new_body' => $post->body], 200);
    }

}