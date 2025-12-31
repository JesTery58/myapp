<?php
namespace App\Http\Controllers;
use  DB;
use App\Http\Controllers\Auth\LoginController;
use App\Category;
use App\Product;
use App\Page;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;


class WebProductController extends BaseController
{

    //Products
    public function Productdetail( $seo_url , Request $request )
    {
       
        $categorys = Category::where('seo_url', $seo_url)->where('type', 'product')->orderBy('orders' , 'ASC')->get();
        if ($categorys->isNotEmpty()) {

            foreach ($categorys as $category) {
                $title          = $category->title;
                $description    = $category->description;
                $keywords       = $category->keywords;
                $subcategory    = Category::where('parent_id', $category->id)->where('type', 'product')->orderBy('orders' , 'ASC')->get();
                $products       = Product::where('category_id', $category->id)->orderby('orders' , 'ASC')->get();
                $title = $category->name;
                if ($subcategory->isNotEmpty()) {
                    return view('product/list', [
                        'results'           => $subcategory,
                        'seo_url'           => $seo_url,
                        'title'             => $title,
                        'description'       => $description,
                        'keywords'          => $keywords
                    ]);
                } else {

                    return view('product/detail', [
                        'results'           => $products,
                        'seo_url'           => $seo_url,
                        'title'             => $title,
                        'description'       => $description,
                        'keywords'          => $keywords
                    ]);
                }
            }
        }else{
            $products = Product::where('seo_url', $seo_url)->where('status','=',1)->orderBy('order' , 'ASC')->get();
            foreach ($products as $product){
                $title          = $product->title;
                $description    = $product->description;
                $keywords       = $product->keywords;
                $Similarproducts =Product::where('category_id', $product->category_id)->orderBy('code' , 'ASC')->get();
            }
            return view('product/product', [
                'results' => $products,
                'seo_url' => $seo_url ,
                'Similarproducts'   => $Similarproducts,
                'title'             => $title,
                'description'       => $description,
                'keywords'          => $keywords
            ]);
        }
    }

    //Urun detay
    public function Productsdetail(Request $request ,$lang )
    {
        
            $products = Product::where('id', $request->get('id'))->orderBy('code' , 'ASC')->orderby('orders' , 'ASC')->get();
            foreach ($products as $product){
                 $title     = isset(unserialize($product->caption)[$lang]) ? unserialize($product->caption)[$lang] : unserialize($product->caption)['en'];
                 $title2    = isset(unserialize($product->caption_two)[$lang])? unserialize($product->caption_two)[$lang] : unserialize($product->caption_two)['en'];
                 $images    = $product->image;
                 $code    = $product->code;

            }
        $veriler=array(
            'name'      => $title,
            'subname'   => $title2,
            'images'    => $images,
            'code'    => $code
        );
        return response()->json($veriler);

    }
    //Listeleme Sayfası
    public function Productlist(Request $request, $seo_url)
    {
        
        $categorys = Category::where('seo_url', $seo_url)->where('type', 'product')->orderBy('orders' , 'ASC')->get();
        $products = Product::where('category_id', $seo_url)->where('status','=',1)->orderBy('code' , 'ASC')->orderby('orders' , 'ASC')->get();
        if($categorys->count() == 0 ){
            return redirect('errorpage/401');
        }
        
        foreach ($categorys as $product){
            $title          = $product->title ?? '';
            $description    = $product->description ?? '';
            $keywords       = $product->keywords ?? '';
            $catID          = $product->id ?? '';

        }

        return view('product/list', [
            'results'           => $products,
            'seo_url'           => $seo_url ,
            'title'             => $title,
            'description'       => $description,
            'keywords'          => $keywords,
            'catID'             => $catID,
        ]);
    }

}
