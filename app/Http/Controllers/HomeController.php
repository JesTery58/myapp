<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Request;


class HomeController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index( Request $request)
    {

        return view('welcome', [
            'title'             => isset($generalsettings->title) ? $generalsettings->title : '',
            'description'       => isset( $generalsettings->description) ?  $generalsettings->description : '',
            'keywords'          => isset($generalsettings->keywords) ? $generalsettings->keywords : '',
        ]);
    }
}
