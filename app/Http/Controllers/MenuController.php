<?php


namespace App\Http\Controllers;


use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function getDeleteLinkAdmin ($menu_id)
    {

        /*Alternative :
         * $post = Post::find($post_id)->first();
         */

        //chercher un unique post à supprimer par son id
        $menu = Menu::where('id', $menu_id)->first();
        $menu->delete();

        return redirect()->route('pl_admin')->with(['message' => 'Lien du menu effacé']);
    }

    /**
     * Creation et validation du menu
     * @param Request $request
     * @return mixed
     */
    public function postCreateMenu (Request $request)
    {

        $this->validate($request, [
            'new_name' => 'required',
            'link' => 'required',
        ]);

        $menu = new Menu();
        $menu->name = $request['name'];
        $menu->link = $request['link'];
        $message = 'Il y a une erreur';
        /*Save the post si c'est un succès c'est bon.*/
        if ($request->user()->menus()->save($menu)) {
            $message = 'L élement a bien été ajouté au menu';
        }

        return redirect()->route('pl_admin')->with(['message' => $message]);
    }
}