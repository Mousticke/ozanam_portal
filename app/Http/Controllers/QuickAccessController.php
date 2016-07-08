<?php
/**
 * Created by PhpStorm.
 * User: Akim
 * Date: 03/05/2016
 * Time: 13:31
 */
namespace App\Http\Controllers;

use App\Access;
use App\Color;
use App\Carousel;
use App\File;
use App\Link;
use App\Menu;
use App\Post;
use App\Rss;
use App\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Suin\RSSWriter\SimpleXMLElement;


class QuickAccessController extends Controller
{

    public function getQuickAccess(){
        $colors = Color::orderBy('name', 'desc')->get();
        $quickAccess = Access::orderBy('created_at', 'desc')->get();
        return view('admin.includes.manageQuickAccess', [
            'quickAccess' => $quickAccess,
            'colors' => $colors
        ]);
    }

    public function getDeleteAccessAdmin($access_id){
        $quickAccess = Access::where('id', $access_id)->first();
        $quickAccess->delete();
        return redirect()->route('admin_quick_access')->with(['message' => 'Accès rapide effacé avec succès']);
    }

    public function postCreateAccess(Request $request){
        $this->validate($request, [
            'titre' => 'required',
            'icon' => 'required',
            'body' => 'required',
            'color_access' => 'required',
            'link_access' => 'required',
        ]);
        $message = 'Il n\' y a une erreur';
        $quickAcces = new Access();
        $quickAcces->titre = $request['titre'];
        $quickAcces->body = $request['body'];
        $quickAcces->icon = $request['icon'];
        $quickAcces->color = $request['color_access'];
        $quickAcces->link = $request['link_access'];

        if ($request->user()->access()->save($quickAcces)) {
            $message = 'L\'accès rapide a été ajouté';
        }
        return redirect()->route('admin_quick_access')->with(['message' => $message]);
    }

    public function postEditAccessAdmin(Request $request){
        $this->validate($request, [
            'body' => 'required'
        ]);
        $quickAccess = Access::find($request['accessId']);
        $message = 'Il n\' y a une erreur';

        $quickAccess->update();
        return response()->json(['access-body-update' => $quickAccess->body, 'message' => $message], 200);
    }
}