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

    public function postQuickAcecs(Request $request){
        $this->validate($request, [
            'titre' => 'required',
            'icon' => 'required',
            'body' => 'required',
        ]);
/* TODO : add database*/
        $quickAcces = new Access();
        $quickAcces->titre = $request['titre'];
        $quickAcces->body = $request['body'];
        $quickAcces->icon = $request['icon'];


    }
}