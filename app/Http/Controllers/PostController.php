<?php
/**
 * Created by PhpStorm.
 * User: Akim
 * Date: 03/05/2016
 * Time: 13:31
 */
namespace App\Http\Controllers;

use App\Color;
use App\Carousel;
use App\File;
use App\Link;
use App\Menu;
use App\Post;
use App\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{

    /**
     * Retourne la dashboard avec tous les posts crées suivant l'ordre décroissant
     * @return mixed
     */
    public function getDashboard ()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $links = Link::orderBy('created_at', 'desc')->where('post_id', $posts->id);
        $carousels = Carousel::orderBy('created_at', 'desc')->get();
        $menus = Menu::orderBy('created_at', 'desc')->get();
        return view('dashboard', [
            'posts' => $posts,
            'carousels' => $carousels,
            'menus' => $menus,
            'links' => $links,
        ]);
    }

    /**
     * Retourne la dashboard de l'index
     * @return mixed
     */
    public function getDashboardIndex ()
    {
        $links = Link::orderBy('created_at', 'desc')->get();
        $posts = Post::orderBy('created_at', 'desc')->get();
        $carousels = Carousel::orderBy('created_at', 'desc')->get();
        $menus = Menu::orderBy('created_at', 'desc')->get();
        return view('welcome', [
            'posts' => $posts,
            'carousels' => $carousels,
            'menus' => $menus,
            'links' => $links,
        ]);
    }

    /**
     * On ne supprime qu'un seul post. On le reconnait en passant en paramètre son id
     * Une fois que le post est supprimé, nous sommes redirigé sur la même page avec un message
     * @param $post_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDeleteActualiteAdmin ($post_id)
    {
        $post = Post::where('id', $post_id)->first();
        $timeline = new Timeline();
        $timeline->title = "Suppression d'une actualité";
        $timeline->post_id = 1;
        $timeline->model = 2; // 0 Carousel 1 Menu 2 Actualités
        $timeline->action = 1; //0 Ajout 1 Suppression 2 Edition
        $timeline->container = $post->body;
        $timeline->user_id = 3;
        $timeline->save();
        $post->delete();
        return redirect()->route('admin_actualite')->with(['message' => 'Post effacé et ajouté à la timeline']);
    }

    /**
     * Les actualités sont triées par ordre décroissant en fonction de la date.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getManageActualiteAdmin(){
        $colors = Color::orderBy('name', 'desc')->get();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('admin.includes.manageActualite',[
            'posts' => $posts,
            'colors' => $colors,
        ]);
    }

    /**
     * Creation et validation de l'actualité. Une fois qu'il n'y a pas d'erreur au niveau du body
     * on crée un nouveau post. Si la requête est bien executée, nous avons un message de réussite
     * Nous sommes ensuite redirigé sur la même page
     * @param Request $request
     * @return mixed
     */
    public function postCreateActualite (Request $request)
    {

        $this->validate($request, [
            'titre' => 'required',
            'image_actu',
            'external_link',
            'body' => 'required|max:500',
            'color_actu' => 'required',
            'facebook_actu',
            'twitter_actu',
            'google_actu',
        ]);

        $timeline = new Timeline();
        $post = new Post();
        $files = Input::file('external_file');

        $post->titre = $request['titre'];
        $post->body = $request['body'];
        $post->color = $request['color_actu'];
        $post->facebook_post = $request['facebook_actu'];
        $post->twitter_post = $request['twitter_actu'];
        $post->google_post = $request['google_actu'];

        $imgactu = $request->file('image_actu');
        $imgactu->move('files/shares/actualite/', $imgactu->getClientOriginalName());
        $post->image_actu = 'files/shares/actualite/' . $imgactu->getClientOriginalName();

        $message = 'Il n\' y a une erreur';
        $message2 = 'Il n\' y a une erreur';
        /*Save the post si c'est un succès c'est bon.*/
        if ($request->user()->post()->save($post)) {
            $message = 'Le post a été ajouté';
        }
        $timeline->action = 0; //0 Ajout 1 Suppression 2 Edition
        $timeline->post_id = $post->id;
        $timeline->model = 2; // 0 Carousel 1 Menu 2 Actualités
        $timeline->title = "Ajout d'une actualité";
        $timeline->container = $post->body;
        if ($request->user()->post()->save($timeline)) {
            $message2 = 'Ajout à la timeline réussi';
        }

        $message3 = 'Il y a une erreur';
        for ($i=0; $i<count($request->external_link); $i++){
            $link_post = new Link();
            $link_post->body = $request->external_link[$i];
            $link_post->user_id = 3;
            $link_post->post_id = $post->id;
            if($request->user()->post()->save($link_post))
                $message3 = 'Lien ajouté';
        }

        $message4 = 'Il y a une erreur';
        foreach($files as $file) {
            $file_post = new File();
            $file->move('files/shares/', $file->getClientOriginalName());
            $file_post->body = 'files/shares/' . $file->getClientOriginalName();
            $file_post->user_id = 3;
            $file_post->post_id = $post->id;
            if($request->user()->post()->save($file_post))
                $message4 = 'Fichier ajouté';
        }

        return redirect()->route('admin_actualite')->with(['message' => $message, 'message2' =>$message2, 'message3' =>$message3, 'message4'=> $message4]);
    }

    /**
     * Si on met rien dans le modal, on a une erreur et il n'y aura pas de changement
     * On va corriger ça. De plus, on doit reloader la page si l'on veut voir les modifications. On va modifer le contenu grâce à l'ajax
     * dans notre fichier .js
     * @see public/src/js/appAdmin.js
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function postEditActualiteAdmin (Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        $post = Post::find($request['postId']);
        $timeline = new Timeline();
        $timeline->container = $post->body;

        $post->body = $request['body'];
        $timeline->action = 2;
        $timeline->post_id = $request['postId'];
        $timeline->model = 2;
        $timeline->title = "Edition d'une actualité";

        $message = 'Il n\' y a une erreur';
        /*Save the action si c'est un succès c'est bon.*/
        if ($request->user()->post()->save($timeline)) {
            $message = 'Ajout à la timeline réussi';
        }
        $post->update();


        return response()->json(['new_body' => $post->body, 'message' => $message], 200);
    }






    /**
     *                                      PARTIE OBSOLETE
     */

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