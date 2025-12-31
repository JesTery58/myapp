<?php

namespace App\Http\Controllers;

use App\Generalsetting;
use App\Language;
use Validator;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\File;


class GeneralsettingController extends Controller
{
    
    public function index(Request $request)
    {

      if ($request->isMethod('POST')) {

        $validator = Validator::make($request->all(), [
            'company1' => 'required',
            'company2' => 'required',
            'website' => 'required',
            //'logo' => 'required',
            //'favicon' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/web-setting')
                ->withErrors($validator)
                ->withInput();
        }
          $generalsetting =Generalsetting::find(1);
          $generalsetting->company1 = $request->get('company1');
          $generalsetting->company2 = $request->get('company2');
          $generalsetting->website = $request->get('website');
          $generalsetting->logo = $request->get('logo');
          $generalsetting->headerscript = $request->get('headerscript');
          $generalsetting->favicon = $request->get('favicon');
          $generalsetting->header = serialize($request->get('header'));
          $generalsetting->footer = serialize($request->get('footer'));
          $generalsetting->title = serialize($request->get('title'));
          $generalsetting->description = serialize($request->get('description'));
          $generalsetting->keywords = serialize($request->get('keywords'));
          $generalsetting->save();
          return redirect('admin/web-setting')->with('status', 'İşleminiz Başarılı');


      }

      $main_settings    =Generalsetting::find('1')->get();
      $languages        =Language::all();
      return view("admin/generalsetting/web-setting" , [ 'main_settings' => $main_settings , 'languages' => $languages ]  );
    }

    public function update(Request $request)
    {



    }
    public function robot(Request $request)
    {
    if($request->isMethod('POST')){

        File::put(public_path('robots.txt'), $request->get('roboticerik'));
    }
    return view('admin/generalsetting/robot');

    }


}
