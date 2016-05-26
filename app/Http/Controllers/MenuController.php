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

    /**
     * On ne peut supprimer qu'une seule icône. On la connait grâce à son ID
     * @param $icon_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDeleteIconAdmin ($icon_id)
    {
        $icons = Faicon::where('id', $icon_id)->first();
        $icons->delete();
        return redirect()->route('admin_menu')->with(['message' => 'Icône du menu effacée']);
    }
    
    /**
     * On supprime un lien du menu. one le connait grâce à son ID
     * @param $menu_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDeleteLinkAdmin ($menu_id)
    {
        $menu = Menu::where('id', $menu_id)->first();
        $menu->delete();
        return redirect()->route('admin_menu')->with(['message' => 'Lien du menu effacé']);
    }

    /**
     * On retourne notre vue avec les variables nécessaires pour afficher la page correctement
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getMenuAdmin ()
    {
        $menus = Menu::orderBy('created_at', 'desc')->get();
        $faicons = Faicon::orderBy('created_at', 'desc')->get();
        return view('admin.includes.manageNavbar', [
            'menus' => $menus,
            'faicons' => $faicons,
        ]);
    }

    /**
     * Formulaire d'ajout d'une icône seulement. Si cette icône est présente dans le dossier uploads, on nous retourne une erreur
     * Sinon, on l'ajoute à la base de données
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreateIcon (Request $request)
    {
        $this->validate($request, [
            'icon_new' => 'required|mimes:png',
        ]);

        $icons = new Faicon();
        $file = $request->file('icon_new');
        $filename = 'uploads/' . $file->getClientOriginalName();
        if(File::exists($filename)){
            $error = 'L\'icône existe déjà en base de données. ';
            return redirect()->route('admin_menu')->with(['error'=>$error]);
        }else{
            $file->move('uploads', $file->getClientOriginalName());
            $icons->faicon = 'uploads/' . $file->getClientOriginalName();
            $message= "Il n'y a une erreur";
            /*Save the post si c'est un succès c'est bon.*/
            if ($request->user()->faicons()->save($icons)) {

                $message = 'L icône est bien ajouté à la base de données';
            }
            return redirect()->route('admin_menu')->with(['message' => $message]);
        }
    }

    /**
     * Formulaire d'ajout d'un lien dans le menu de navigation. On donne un nom, un lien, une icône ainsi qu'un visibilité (public, privée)
     * Si l'icône existe, elle sera supprimée et remplacée
     * @param Request $request
     * @return mixed
     */
    public function postCreateMenu (Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'link' => 'required',
            'icon' => 'required_without_all:icon_exist|mimes:png',
            'visibility' =>'required',
            'icon_exist' => 'required_without_all:icon'
        ]);

        $menu = new Menu();
        $icons = new Faicon();

        $menu->name = $request['name'];
        $menu->link = $request['link'];
        $menu->visibility = $request['visibility'];
        $file = $request->file('icon');
        $filename = 'uploads/' . $file->getClientOriginalName();
        if(File::exists($filename)){
            $menu->icon = 'uploads/' . $file->getClientOriginalName();
            $message = 'Il y a une erreur';
            /*Save the post si c'est un succès c'est bon.*/
            if ($request->user()->menus()->save($menu)) {
                $message = 'L\'icône est existant dans la base de données. Supression de duplication. L\'élement a bien été ajouté au menu';
            }
            return redirect()->route('admin_menu')->with(['message' => $message]);
        }else{
            $file->move('uploads', $file->getClientOriginalName());
            $icons->faicon = 'uploads/' . $file->getClientOriginalName();
            $menu->icon = 'uploads/' . $file->getClientOriginalName();

            $message = 'Il y a une erreur';
            if ($request->user()->faicons()->save($icons) && $request->user()->menus()->save($menu)) {
                $message = 'L\'icône est bien ajouté à la base de données. L\'élement a bien été ajouté au menu';
            }
            return redirect()->route('admin_menu')->with(['message' => $message]);
        }
    }
    
    /**
     * Formulaire d'édition du lien dans le menu. Les données sont données en ajax.
     * @see pulic/src/js/appAdmin.js
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function postEditMenuAdmin (Request $request)
    {
        $this->validate($request, [
            'new_name_site' => 'required',
            'new_link_site' => 'max:520',
            'new_icon_site'  => 'required',
            'new_visibility_site'  => 'required',
        ]);
        $menu = Menu::find($request['postId']);
        $menu->name = $request['new_name_site'];
        $menu->link = $request['new_link_site'];
        $menu->icon = $request['new_icon_site'];
        $menu->visibility = $request['new_visibility_site'];

        $menu->update();
        return response()->json(['new_name_update' => $menu->name, 'new_link_update' => $menu->link, 'new_icon_update' => $menu->icon, 'new_visibility_update' => $menu->visibility], 200);
    }
    

}