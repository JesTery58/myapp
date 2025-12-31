<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;

use Symfony\Component\HttpFoundation\Session\Session;


class SessionController extends BaseController
{
    public function language(Request $request , $id)
    {
        $session = new Session();
        $locale = $session->get('locale');

        if (array_key_exists('locale', $_GET)) {
            $locale = $_GET['locale'];
            $session->set('locale', $locale);

        }else{
            $session->set('locale', $id);
        }
        die();
        //return \Redirect::back();
       // return new JsonResponse(['data' => 'success']);

    }
}

