<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FiledirectoryController extends AdminbaseController
{
    //
    public function index(Request $request)
    {
        //dump('wdwedwe');die();
        return view('/admin/file-directory/files');
    }
}
