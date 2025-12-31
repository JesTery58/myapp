<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\contact;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

class BlogController extends AdminbaseController
{
    public function messages()
    {
        return [
            'name.required' => 'Dil Adını Boş Bırakamazsınız',
            'code.required'  => 'A message is required',
        ];
    }
    public function index()
    {
      $blogs = Blog::leftJoin('categories', function($join) {
      $join->on( 'categories.seo_url' , '=', 'blogs.category_id' );
    })
    ->get([
        'blogs.id',
        'blogs.caption',
        'blogs.caption_two',
        'blogs.status',
        'blogs.conment',
        'blogs.orders',
        'blogs.image',
        'blogs.created_at',
        'categories.name',
        'categories.seo_url as catseo'


    ]);
      //var_dump($blogs);die();
        return view("admin/blog/index",[ 'blogs'=> $blogs ]  );
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

                'caption' => 'required',
                'caption_two' => 'required',
                'orders' => 'required',
                //'images' => 'required',
                //'favicon' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect('/admin/blog/create')
                    ->withErrors($validator)
                    ->withInput();
            }

            $blog = new Blog;
            $blog->seo_url        = str_slug($request->get('caption')['tr'],'-');
            $blog->category_id    = $request->get('parent_id');
            $blog->caption        = serialize($request->get('caption'));
            $blog->caption_two    = serialize($request->get('caption_two'));
            $blog->orders          = $request->get('orders');
            $blog->status         = $request->get('status');
            $blog->conment        = serialize($request->get('conment'));
            $blog->image          = $request->get('image');
            $blog->title          =  serialize($request->get('title'));
            $blog->description    =  serialize($request->get('description'));
            $blog->keywords       =  serialize($request->get('keywords'));
            $blog->save();
            return redirect('admin/blog')->with('status', 'İşleminiz Başarılı');


        }
        $blogcategories         =Category::where( 'type' , 'blog')->where('parent_id' , '0')->get();
        return view("admin/Blog/create" ,[ 'blogcategories'=> $blogcategories ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */


    public function update( $id , Request $request )
    {
        $blog    = Blog::find($id);
        if ($request->isMethod('POST')) {

            $validator = Validator::make($request->all(), [
                'caption' => 'required',
                'caption_two' => 'required',
                'orders' => 'required',
                //'images' => 'required',
                //'logo' => 'required',
                //'favicon' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect('/admin/blog/update/'.$id.'')
                    ->withErrors($validator)
                    ->withInput();
            }

            $blog->seo_url        = str_slug($request->get('caption')['tr'],'-');
            $blog->category_id    = $request->get('parent_id');
            $blog->caption        = serialize($request->get('caption'));
            $blog->caption_two    = serialize($request->get('caption_two'));
            $blog->orders          = $request->get('orders');
            $blog->status         = $request->get('status');
            $blog->conment        = serialize($request->get('conment'));
            $blog->image          = $request->get('image');
            $blog->title          =  serialize($request->get('title'));
            $blog->description    =  serialize($request->get('description'));
            $blog->keywords       =  serialize($request->get('keywords'));
            $blog ->save();
            return redirect('admin/blog')->with('status', 'İşleminiz Başarılı');


        }

        $blogcategories         =Category::where( 'type' , 'blog')->where('parent_id' , '0')->get();
        return view("admin/blog/update" , [ 'blog' => $blog ,  'id' => $id , 'blogcategories'=> $blogcategories ] );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  contact  $contact
     * @return Response
     */
    public function delete($id)
    {
        $blog = Blog::destroy($id);
        return redirect('admin/blog')->with('status', 'Kayıt başarı ile silindi.');
    }


    public function detail( $seo_url , Request $request)
    {
        $blogdetails   =Blog::where('seo_url' , $seo_url)->get();
        return view("blog/detail", [ 'blogdetails' => $blogdetails ]  );
    }
    public function list()
    {
        $blogs=Blog::all();
        return view("blog/index",[ 'blogs'=> $blogs ]  );
    }
}
