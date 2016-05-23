<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize ()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules ()
    {
        return [
            'email' => 'required|email',
            'name' => 'required|alpha',
            'bodyMessage' => 'required',
            'fileToUplaod' => 'max:10240|mimes:jpeg,bmp,png,gif,zip,rar,pdf,psd,ai,cdr,rtf,doc,docx,xls,xlsx,ppt',
        ];
    }
}
