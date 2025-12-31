<?php
namespace App\Http\Controllers;
use App\Popup;
use  DB;
use App\Http\Controllers\Auth\LoginController;
use App\Category;
use App\Product;
use App\Contact;
use App\Slider;
use App\Sosial;
use App\Blog;
use App\Generalsetting;
use App\Language;
use App\Page;
use App\Message;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use View;


class BaseController extends Controller
{
    public function __construct()
    {

        $session = new Session();
        $locale = $session->get('locale');
        if(!$locale){
          $locale= 'en';
          App::setLocale($locale);
          //var_dump($locale);die();
        }else{
          App::setLocale($locale);
        }



        $generalsettings    = Generalsetting::find(1);
        $lang_lists         = Language::where('status' , '1')->get();
        $sliders            = Slider::where('status' , '1')->get();
        $sosials            = Sosial::where('status' , '1')->get();
        $blogs              = Blog::where('status' , '1')->get();
        $bloglatest              = Blog::where('status' , '1')->orderby('created_at','DESC')->limit('1','3')->get();

        $bloglastcategories = Blog::orderBy('id' , 'DESC')->limit(6)->get();
        $menus              = Category::where('type' , 'menus')->where('parent_id' , '0')->get();
        $productCategory    = Category::where('type' , 'product')->orderBy('orders' , 'ASC')->get();
        $subproductCategory    = Category::where('type' , 'product')->where('parent_id' ,'!=','0')->orderBy('orders' , 'ASC')->get();
        $blogCategory       = Category::where('type' , 'blog')->where('parent_id' , '0')->orderBy('orders' , 'ASC')->get();
        $blogCategory2      = Category::where('type' , 'blog')->where('parent_id' ,'!=' ,  '0')->orderBy('orders' , 'ASC')->get();
        $contacts           = Contact::find(1);
        $languages          = Language::all();
        $popups          = Popup::all();

        View::share([
            'generalsettings' => $generalsettings,
            'languages' => $languages,
            'lang_lists' => $lang_lists,
            'sosials' => $sosials,
            'sliders' => $sliders,
            'blogs' => $blogs,
            'contacts' => $contacts,
            'menus' => $menus,
            'lang' => $locale,
            'productCategory'=> $productCategory,
            'subproductCategory'=> $subproductCategory,
            'blogCategory'=> $blogCategory,
            'blogCategory2'=> $blogCategory2,
            'bloglastcategories' =>$bloglastcategories,
            'bloglatest' =>$bloglatest,
            'popups' =>$popups,
        ]);



    }

    public function index(Request $request)
    {
        $settings       = Generalsetting::find(1);
        $title          = $settings->title;
        $description    = $settings->description;
        $keywords       = $settings->keywords;

        return view('welcome2', [
            'title'             => $title,
            'description'       => $description,
            'keywords'          => $keywords
        ]);
    }

    public function Contactdetail( Request $request){

        $pagesinfos = Page::where('seo_url' , 'iletisim')->get();
        foreach ($pagesinfos as $pagesinfo){
            $title          = $pagesinfo->caption;
            $description    = $pagesinfo->caption;
            $keywords       = $pagesinfo->caption;
        }
        return view('contact/contact',[
            'title'             => $title,
            'description'       => $description,
            'keywords'          => $keywords
        ]);
    }
    public  function sendForm( Request $request){
      if ($request->isMethod('POST')) {
          $formkayit =new Message();
          $formkayit->type = 'contact-form';
          $formkayit->name = $request->get('name');
          $formkayit->surname = 'name';
          $formkayit->email = $request->get('name');
          $formkayit->phone = $request->get('name');
          $formkayit->message = $request->get('name');
          $formkayit->save();
         return response()->json( ['msg' => 'This is post method']);
      }

    }
    public function Pagesdetail( $seo_url){
        $pagesinfos = Page::where('seo_url' , $seo_url)->get();
        foreach ($pagesinfos as $pagesinfo){
            $caption        = $pagesinfo->caption;
            $caption_two    = $pagesinfo->caption_two;
            $title          = $pagesinfo->title;
            $description    = $pagesinfo->description;
            $keywords       = $pagesinfo->keywords;
            $comment        = $pagesinfo->comment;
            $comment        = $pagesinfo->comment;
        }
        return view('pages/pages',[
          'caption'             => $caption,
          'caption_two'         => $caption_two,
          'title'               => $title,
          'description'         => $description,
          'keywords'            => $keywords,
          'comment'             => $comment,
          'seo_url'             => $seo_url
        ]);
    }

    public function aboutus(Request $request){


        return view('pages/aboutus',[
            'title'               => '',
            'description'         => '',
            'keywords'            => '',
        ]);
    }
    public function integrations(Request $request){


        return view('pages/integrations',[
            'title'               => '',
            'description'         => '',
            'keywords'            => '',
        ]);
    }
    public function errorpage(Request $request  ,$type){
    
        return view('pages/404',[
            'type'                  => $type,
            'title'               => '',
            'description'         => '',
            'keywords'            => '',
        ]);
    }
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
