<?php
/**
 * Created by PhpStorm.
 * User: Akim
 * Date: 11/05/2016
 * Time: 10:25
 */

namespace App\Http\Controllers;


use App\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarouselController extends Controller
{

    /**
     * On ne supprime qu'un seul carousel. On le reconnait en passant en paramètre son id
     * Une fois que le post est supprimé, nous sommes redirigé sur la même page avec un message
     * @param $carousel_id
     * @return mixed
     */
    public function getDeleteCarousel ($carousel_id)
    {

        /*Alternative :
         * $post = Post::find($post_id)->first();
         */
        //chercher un unique post à supprimer par son id
        $carousel = Carousel::where('id', $carousel_id)->first();
        if (Auth::user() != $carousel->user) {
            return redirect()->back();
        }
        $carousel->delete();
        return redirect()->route('admin_carousel')->with(['message' => 'Carousel effacé']);
    }

    /**
     * Les images du carousel sont triées par ordre décroissant en fonction de la date.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getManageCarouselAdmin(){
        $carousels = Carousel::orderBy('created_at', 'desc')->get();
        return view('admin.includes.manageCarousel', [
            'carousels' => $carousels,
        ]);
    }
    
    /**
     * Creation et validation du carousel. Une fois qu'il n'y a pas d'erreur au niveau du body
     * on crée un nouveau post. Si la requête est bien executée, nous avons un message de réussite
     * Nous sommes ensuite redirigé sur la même page
     * @param Request $request
     * @return mixed
     */
    public function postCreateCarousel (Request $request)
    {
        $this->validate($request, [
            'body' => 'required|max:500'
        ]);

        $carousel = new Carousel();
        $carousel->body = $request['body'];
        $messageCarousel = 'Il n\' y a une erreur';
        //save le carousel
        if ($request->user()->carousel()->save($carousel)) {
            $messageCarousel = 'Ajout au carousel reussi';
        }
        return redirect()->route('admin_carousel')->with(['message' => $messageCarousel]);
    }

}