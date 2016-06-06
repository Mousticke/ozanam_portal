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
use App\Rss;
use App\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Suin\RSSWriter\SimpleXMLElement;


class RSSController extends Controller
{

    public function getRSSfeed(){
        $rssfeed = Rss::orderBy('created_at', 'desc')->get();
        return view('admin.includes.manageRSS', [
            'rssfeed' => $rssfeed,
        ]);
    }
    public function postCreateRSS(Request $request){
        $this->validate($request, [
            'link_feed' => 'required|max:1000',
            'name_feed' => 'required',
        ]);

        $rssFeed = new Rss();
        $rssFeed->link = $request['link_feed'];
        $rssFeed->name = $request['name_feed'];

        $message = 'Il y a une erreur';

        if ($request->user()->post()->save($rssFeed)) {
            $message = 'Ajout du flux RSS réussi';
        }

        return redirect()->route('admin_rss')->with(['message' => $message]);
    }

}