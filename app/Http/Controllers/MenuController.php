<?php


namespace App\Http\Controllers;



use App\Faicon;
use App\Menu;
use App\Timeline;
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
        $timeline = new Timeline();
        $timeline->title = "Suppression d'une icône";
        $timeline->faicon_id = 1;
        $timeline->model = 1; // 0 Carousel 1 Menu 2 Actualités
        $timeline->action = 1; //0 Ajout 1 Suppression 2 Edition
        $timeline->container = $icons->faicon;
        $timeline->user_id = 3;
        $timeline->save();
        $icons->delete();
        return redirect()->route('admin_menu')->with(['message' => 'Icône du menu effacée et ajouté à la timeline']);
    }
    
    /**
     * On supprime un lien du menu. one le connait grâce à son ID
     * @param $menu_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDeleteLinkAdmin ($menu_id)
    {
        $menu = Menu::where('id', $menu_id)->first();
        $timeline = new Timeline();
        $timeline->title = "Suppression d'un lien";
        $timeline->menu_id = 1;
        $timeline->model = 1; // 0 Carousel 1 Menu 2 Actualités
        $timeline->action = 1; //0 Ajout 1 Suppression 2 Edition
        $timeline->container = $menu->name;
        $timeline->user_id = 3;
        $timeline->save();
        $menu->delete();
        return redirect()->route('admin_menu')->with(['message' => 'Lien du menu effacé et ajouté à la timeline']);
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
        $timeline = new Timeline();

        $timeline->action = 0; //0 Ajout 1 Suppression 2 Edition
        $timeline->model = 1; // 0 Carousel 1 Menu 2 Actualités
        $timeline->title = "Ajout d'une icône";

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
            if ($request->user()->faicon()->save($icons)) {

                $message = 'L icône est bien ajouté à la base de données';
            }
            $message2 = 'Il n\' y a une erreur';
            $timeline->faicon_id = $icons->id;
            $timeline->container = $icons->faicon;


            if ($request->user()->faicon()->save($timeline)) {
                $message2 = 'Ajout à la timeline réussi';
            }
            return redirect()->route('admin_menu')->with(['message' => $message, 'message2' => $message2]);
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
        $timeline = new Timeline();

        $menu->name = $request['name'];
        $menu->link = $request['link'];
        $menu->visibility = $request['visibility'];

        $timeline->action = 0; //0 Ajout 1 Suppression 2 Edition
        $timeline->model = 1; // 0 Carousel 1 Menu 2 Actualités
        $timeline->title = "Ajout d'un lien dans le menu";

        $file = $request->file('icon');
        $filename = 'uploads/' . $file->getClientOriginalName();

        if(File::exists($filename)){
            $menu->icon = 'uploads/' . $file->getClientOriginalName();
            $message = 'Il y a une erreur';
            
            /*Save the post si c'est un succès c'est bon.*/
            if ($request->user()->menu()->save($menu)) {
                $message = 'L\'icône est existant dans la base de données. Supression de duplication. L\'élement a bien été ajouté au menu';
            }
            $message2 = 'Il n\' y a une erreur';
            $timeline->menu_id = $menu->id;
            $timeline->container = $menu->name . "->" . $menu->link . "avec une visibilité : " . $menu->visibility . " symbolisé par l'icône " . $menu->icon;


            if ($request->user()->menu()->save($timeline)) {
                $message2 = 'Ajout à la timeline réussi';
            }
            return redirect()->route('admin_menu')->with(['message' => $message, 'message2' => $message2]);
        }else{
            $file->move('uploads', $file->getClientOriginalName());
            $icons->faicon = 'uploads/' . $file->getClientOriginalName();
            $menu->icon = 'uploads/' . $file->getClientOriginalName();

            if ($request->user()->faicon()->save($icons) && $request->user()->menu()->save($menu)) {
                $message = 'L\'icône est bien ajouté à la base de données. L\'élement a bien été ajouté au menu';
            }

            $timeline->container = $menu->name . "->" . $menu->link . "avec une visibilité : " . $menu->visibility . " symbolisé par l'icône " . $menu->icon;
            $timeline->faicon_id = $icons->id;

            $timeline2 = new Timeline();
            $timeline2->action = 0; //0 Ajout 1 Suppression 2 Edition
            $timeline2->faicon_id = $icons->id;
            $timeline2->model = 1; // 0 Carousel 1 Menu 2 Actualités

            $timeline2->faicon_id = $icons->id;
            $timeline2->container = $icons->faicon;
            $timeline2->title = "Ajout d'une icône";

            $message = 'Il y a une erreur';
            $message2 = 'Il n\' y a une erreur';
            $message3 = 'Il n\' y a une erreur';
            $timeline->menu_id = $menu->id;

            if ($request->user()->menu()->save($timeline)) {
                $message2 = 'Ajout à la timeline réussi';
            }
            if ($request->user()->menu()->save($timeline2)) {
                $message3 = 'Ajout à la timeline réussi';
            }
            return redirect()->route('admin_menu')->with(['message' => $message, 'message2' => $message2,  'message3' => $message3]);
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
        $timeline = new Timeline();
        $timeline->container = $menu->name . " " . $menu->link . " " . $menu->icon . " " . $menu->visibility;
        $menu->name = $request['new_name_site'];
        $menu->link = $request['new_link_site'];
        $menu->icon = $request['new_icon_site'];
        $menu->visibility = $request['new_visibility_site'];

        $timeline->action = 2;
        $timeline->menu_id = $request['postId'];
        $timeline->model = 1;
        $timeline->title = "Edition d'un lien du menu";

        $message = 'Il n\' y a une erreur';
        /*Save the action si c'est un succès c'est bon.*/
        if ($request->user()->post()->save($timeline)) {
            $message = 'Ajout à la timeline réussi';
        }

        $menu->update();
        return response()->json(['new_name_update' => $menu->name, 'new_link_update' => $menu->link, 'new_icon_update' => $menu->icon, 'new_visibility_update' => $menu->visibility, 'message' => $message], 200);
    }
    

}