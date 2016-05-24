<?php


namespace App\Http\Controllers;


use App\Faicon;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

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
            'name' => 'required',
            'link' => 'required',
            'icon' => 'required_without_all:icon_exist|mimes:png',
            'icon_exist' => 'required_without_all:icon'
        ]);

        $menu = new Menu();
        $icons = new Faicon();

        $menu->name = $request['name'];
        $menu->link = $request['link'];

        $file = $request->file('icon');
        if(File::exists($file)){
            $menu->icon = 'uploads/' . $file->getClientOriginalName();

            $message = 'Il y a une erreur';
            /*Save the post si c'est un succès c'est bon.*/
            if ($request->user()->menus()->save($menu)) {
                $message = 'L icône est bien ajouté à la base de données. L élement a bien été ajouté au menu';
            }
            return redirect()->route('pl_admin')->with(['message' => $message]);
        }else{
            $file->move('uploads', $file->getClientOriginalName());
            $icons->faicon = 'uploads/' . $file->getClientOriginalName();
            $menu->icon = 'uploads/' . $file->getClientOriginalName();

            $message = 'Il y a une erreur';
            if ($request->user()->faicons()->save($icons) && $request->user()->menus()->save($menu)) {
                $message = 'L icône est bien ajouté à la base de données. L élement a bien été ajouté au menu';
            }

            return redirect()->route('pl_admin')->with(['message' => $message]);
        }

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreateIcon (Request $request)
    {

        $this->validate($request, [
            'icon' => 'required',
        ]);

        $icons = new Faicon();
        $file = $request->file('icon');
        $file->move('uploads', $file->getClientOriginalName());
        $icons->faicon = 'uploads/' . $file->getClientOriginalName();
        $message = 'Il y a une erreur';
        /*Save the post si c'est un succès c'est bon.*/
        if ($request->user()->faicons()->save($icons)) {
            $message = 'L icône est bien ajouté à la base de données';
        }

        return redirect()->route('pl_admin')->with(['message' => $message]);
    }
}