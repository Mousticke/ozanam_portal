<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Validator;

class ContactController extends Controller
{

    /**
     * On envoie un message à abenchiha@outlook.fr avec un nom, un message, un fichier (facultatif) 
     * @param Request $request
     * @return $this
     */
    public function postContact (Request $request)
    {
        $input = Input::all();
        Mail::send('email_contact',
            array(
                'email' => $request->input('email'),
                'name' => $request->input('name'),
                'bodyMessage' => $request->input('bodyMessage'),
            ),
            function ($message) use ($request, $input) {
                $message->to('abenchiha@outlook.fr')->subject('Contact.');
                $message->replyTo($request->input('email'), $request->input('name'));
                if (isset($input['fileToUpload'])) {
                    $message->attach($input['fileToUpload']->getRealPath(), array(
                        'as' => $input['fileToUpload']->getClientOriginalName(),
                        'mime' => $input['fileToUpload']->getMimeType()));
                }
            });
        return view('confirmContact')
            ->with('message', 'Un problème est survenu lors de l\'envoie de l\'email');
    }
}