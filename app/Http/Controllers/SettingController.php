<?php

namespace App\Http\Controllers;

use App\Setting;
use Symfony\Component\HttpFoundation\JsonResponse;
use Validator;
use Symfony\Component\HttpFoundation\Request;

class SettingController extends Controller
{
    public function indexAction()
    {

        return view('settings/index');
    }

    public function toleranceAction()
    {
        $settings = Setting::all();
        return view('settings/tolerance', ['settings' => $settings]);
    }

    public function weightAction()
    {

        return view('settings/weight');
    }

    public function systemAction()
    {

        return view('settings/system');
    }


}
