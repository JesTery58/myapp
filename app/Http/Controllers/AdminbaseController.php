<?php

namespace App\Http\Controllers;
use  DB;
use App\Http\Controllers\Auth\LoginController;
use Carbon\Carbon;
use App\Category;
use App\Contact;
use App\Slider;
use App\Sosial;
use App\Blog;
use App\Generalsetting;
use App\Language;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\App;
use View;

class AdminbaseController extends Controller
{


    public function __construct()
    {
      $session = new Session();
      $locale = $session->get('locale');
      if(!$locale){
        $locale= 'tr';
        App::setLocale($locale);
        //var_dump($locale);die();
      }else{
        App::setLocale($locale);
      }
        //Carbon::setLocale('en');
        //Carbon::setlocale(LC_TIME, 'Turkish');  // ya da tr_TR.utf8
        $this->middleware('auth:admin');

        $session = new Session();
        $locale = $session->get('locale');
        if (array_key_exists('locale', $_GET)) {
            $locale = $_GET['locale'];
            $session->set('locale', $locale);
        }

        App::setLocale($locale);
        $generalsettings    =Generalsetting::find(1);
        $lang_lists          = Language::where('status' , '1')->get();
        $sliders            = Slider::where('status' , '1')->get();
        $sosials            = Sosial::where('status' , '1')->get();
        $blogs              = Blog::where('status' , '1')->get();
        $menus              = Category::where('type' , 'menus')->where('parent_id' , '0')->get();
        $productCategory    = Category::where('type' , 'product')->where('parent_id' , '0')->get();
        $contacts           = Contact::find(1);
        $languages          = Language::all();

        View::share([
            'generalsettings' => $generalsettings,
            'languages' => $languages,
            'lang_lists' => $lang_lists,
            'sosials' => $sosials,
            'sliders' => $sliders,
            'blogs' => $blogs,
            'contacts' => $contacts,
            'menus' => $menus,
            'lang' => App::getLocale(),
            'productCategory'=> $productCategory,
        ]);



    }
}
