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
        if ($request->user()->carousels()->save($carousel)) {
            $messageCarousel = 'Ajout au carousel reussi';
        }
        return redirect()->route('admin_carousel')->with(['message' => $messageCarousel]);
    }

    /**
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


}