<?php

namespace App\Http\Controllers;

use App\contact;
use App\Kategoriler;
use App\Kategoris;
use App\Product;
use App\Category;
use App\Urunler;
use App\Urunlers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Validator;


class ProductsController extends AdminbaseController
{
    public function messages()
    {
        return [
            'name.required' => 'Dil Adını Boş Bırakamazsınız',
            'code.required'  => 'A message is required',
        ];
    }
    public function index(Request $request )
    {
        if($request->isMethod('POST')){

            $products = Product::where('code', 'like', '%'.$request->get('search').'%')
            ->orwhere('caption', 'like', '%'.$request->get('search').'%')
            ->orderby('code','ASC')
            ->paginate(20);
            $searchWords = $request->get('search');

        }else{
            $products=Product::orderby('code','ASC')->paginate(20);

            $searchWords = "";
        }
        $products2=Product::orderby('code','ASC')->get();
       
        return view("admin/product/index",[ 
            'products'=> $products,
            'products2'=> $products2,
            'searchWords' => $searchWords ]
        
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'caption.*'     => 'required',
                'caption_two.*' => 'required',
                'parent_id'     => 'required',
                'orders'        => 'required',
                'images.*'      => 'required',
                //'logo' => 'required',

            ],
                [
                    'category_id.required'              => 'Bir Kategori Seçiniz',
                    'orders.required'                   => 'Sıra Numarasını Giriniz',
                    'caption.*.required'                => 'Başlıkları Giriniz',
                    'caption_two.*.required'            => 'Alt Başlıkları Giriniz',
                    'images.*.required'                 => 'En Az Bir Resim Ekleyiniz',

                ]);

            if ($validator->fails()) {
                return redirect('/admin/products/create')
                    ->withErrors($validator)
                    ->withInput();
            }

            $products = new Product();
            $products->seo_url        = str_slug($request->get('code').$request->get('caption')['tr'],'-');
            $products->category_id    = $request->get('parent_id');
            $products->caption        = serialize($request->get('caption'));
            $products->caption_two    = serialize($request->get('caption_two'));
            $products->orders          = $request->get('orders');
            $products->status         = $request->get('status');
            $products->code           = $request->get('code');
            $products->price          = $request->get('price');
            $products->comment        = serialize($request->get('comment'));
            $products->features       = serialize($request->get('features'));
            $products->image          = implode(',', $request->get('image'));
            $products->title          =  serialize($request->get('title'));
            $products->description    =  serialize($request->get('description'));
            $products->keywords       =  serialize($request->get('keywords'));
            $products->save();
            return redirect('admin/products')->with('status', 'İşleminiz Başarılı');


        }

        $categories         =Category::where( 'type' , 'product')->where('parent_id' , '0')->orderBy('orders' , 'ASC')->get();
        return view("admin/product/create" , [ 'categories'=> $categories ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */


    public function update( $id , Request $request )
    {
        $products    = Product::find($id);
        if ($request->isMethod('POST')) {
            
            $validator = Validator::make($request->all(), [
                'caption.*'     => 'required',
               // 'caption_two.*' => 'required',
                'orders'        => 'required',
                'images.*'      => 'required',
                //'logo' => 'required',

            ],
                [
                    'orders.required'                   => 'Sıra Numarasını Giriniz',
                    'caption.*.required'                => 'Başlıkları Giriniz',
                    'caption_two.*.required'            => 'Alt Başlıkları Giriniz',
                    'images.*.required'                 => 'En Az Bir Resim Ekleyiniz',

                ]);

            if ($validator->fails()) {
                return redirect('/admin/products/update/'.$id.'')
                    ->withErrors($validator)
                    ->withInput();
            }
            if ($request->get('category_id2')){
                $kategori = $request->get('category_id2');
            } else{
                $kategori = $request->get('category_id2');
            }

            $products->seo_url        = str_slug($request->get('code').$request->get('caption')['tr'],'-');
            $products->category_id    = $kategori;
            $products->caption        = serialize($request->get('caption'));
            $products->caption_two    = serialize($request->get('caption_two'));
            $products->orders          = $request->get('orders');
            $products->status         = $request->get('status');
            $products->code           = $request->get('code');
            $products->price          = $request->get('price');
            $products->comment        = serialize($request->get('comment'));
            $products->features       = serialize($request->get('features'));
            $products->image          = implode(',', $request->get('image'));
            $products->title          =  serialize($request->get('title'));
            $products->description    =  serialize($request->get('description'));
            $products->keywords       =  serialize($request->get('keywords'));
            $products ->save();
            return redirect('admin/products')->with('status', 'İşleminiz Başarılı');
        }

        $categories         =Category::where( 'type' , 'product')->where('parent_id' , '0')->orderby('orders' , 'ASC')->get();

        return view("admin/product/update" , [ 'product' => $products , 'categories'=> $categories , 'id' => $id ]  );
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  contact  $contact
     * @return Response
     */
    public function delete($id)
    {
        $product = Product::destroy($id);
        return redirect('admin/products')->with('status', 'Kayıt başarı ile silindi.');
    }
    public function detail( $seo_url , Request $request )
    {
        $categorys = Category::where('seo_url' , $seo_url)->where('type' , 'product')->get();

        foreach ($categorys as $category ){
            $subcategory    = Category::where('parent_id' , $category->id)->where('type' , 'product')->get();
            $products       = Product::where('category_id' , $category->id)->get();
            $bannerTitle    = $category->name;
            if($subcategory->isNotEmpty()){
                return view('product/list',[ 'results'=> $subcategory , 'seo_url'=> $seo_url , 'bannerTitle' => $bannerTitle]);

            }else{

                return view('product/detail',[ 'results'=> $products , 'seo_url'=> $seo_url , 'bannerTitle' => $bannerTitle]);
            }
        }
    }

    public function productCopy( $id )
    {
      $tasks = Product::find($id);
      $newTask = $tasks->replicate();
      $newTask->save();
      $products=Product::all();
      return view("admin/product/index",[ 'products'=> $products ]  );
    }


    public function productal( Request $request)
    {
        if($request->isMethod('POST')){
            $categories = new Category();
            $categories->id             = $request->get('silid');
            $categories->parent_id      = $request->get('parent_id');
            $categories->type           = 'product';
            $categories->name           =  serialize($request->get('name'));
            $categories->seo_url        =  $request->get('seo_url');
            $categories->orders         =  '1';
            $categories->status         =  '1';
            $categories->image          =  '22';
            $categories->title          =  serialize($request->get('title'));
            $categories->description    =  serialize($request->get('description'));
            $categories->keywords       =  serialize($request->get('keywords'));
            $categories->save();

            $sil = Kategoriler::destroy($request->get('silid'));

            return redirect('admin/products/al')->with('status', 'İşleminiz Başarılı');
        }
        $urunler =DB::table('kategorilers')
            ->limit('1','1')
            ->get();
        //dump($urunler);
        return view("admin/product/al",[
            'urunler'=> $urunler,
        ]);
    }
}
