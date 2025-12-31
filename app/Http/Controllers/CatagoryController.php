<?php

namespace App\Http\Controllers;

use App\catagory;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

class CatagoryController extends AdminbaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index( $type )
    {
        $categories = Category::where( 'type' , $type)->where('parent_id' , '0')->orderBy('orders' , 'ASC')->get();
        return view("admin/category/index", [ 'categories' => $categories , 'type'=> $type] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create( $type , $id , Request $request)
    {
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [

                'name.*' => 'required',
                'seo_url' => 'unique',
                //'order' => 'required',
                //'images' => 'required',
                //'favicon' => 'required',
            ],
            [

                    'name.*.required'   => 'Başlıkları Giriniz',
                    'seo_url.unique'    => 'Aynı İsimde Kategori Olmaz',


                ]);


            if ($validator->fails()) {
                return redirect('/admin/catagory/create/'.$type.'/'.$id.'')
                    ->withErrors($validator)
                    ->withInput();
            }

            $categories = new Category();
            $categories->parent_id      = $id;
            $categories->type           = $type;
            $categories->name           =  serialize($request->get('name'));
            $categories->seo_url        =  str_slug($request->get('name')['tr'],'-');
            $categories->orders         =  $request->get('orders');
            $categories->status         =  $request->get('status');
            $categories->image          =  $request->get('image');
            $categories->title          =  serialize($request->get('title'));
            $categories->description    =  serialize($request->get('description'));
            $categories->keywords       =  serialize($request->get('keywords'));
            $categories->save();

            return redirect('admin/category/'.$type.'')->with('status', 'İşleminiz Başarılı');


        }


        return view("admin/category/create" , [ 'type'=>$type , 'id'=> $id ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function update(Request $request ,$type , $id )
    {

        $categories    = Category::find($id);

        if ($request->isMethod('POST')) {

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                //'caption_two' => 'required',
                //'order' => 'required',
                //'images' => 'required',
                //'logo' => 'required',
                //'favicon' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect('/admin/category/update/'.$type.'/'.$id.'')
                    ->withErrors($validator)
                    ->withInput();
            }
                
            $categories->parent_id      = $request->get('parent_id');
            $categories->name           =  serialize($request->get('name'));
            $categories->seo_url        =  str_slug($request->get('name')['tr'],'-');
            $categories->orders         =  $request->get('orders');
            $categories->status         =  $request->get('status');
            $categories->title          =  serialize($request->get('title'));
            $categories->description    =  serialize($request->get('description'));
            $categories->keywords       =  serialize($request->get('keywords'));
            $categories ->save();

            return redirect('admin/category/'.$type.'')->with('status', 'İşleminiz Başarılı');


        }
        $categoriesall=Category::where( 'type' , $type)->where('parent_id' , '0')->get();

        return view("admin/category/update" , [
            'categoriesall' => $categoriesall,
            'categories' => $categories ,
            'type'=>$type ,
            'id'=> $id ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  catagory  $catagory
     * @return Response
     */
    public function show(catagory $catagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  catagory  $catagory
     * @return Response
     */
    public function edit(catagory $catagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  catagory  $catagory
     * @return Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  catagory  $catagory
     * @return Response
     */
    public function delete( $type ,  $id)
    {
        $category = Category::destroy( $type , $id);
        return redirect('admin/category/'.$type.'')->with('status', 'Kayıt başarı ile silindi.');
    }
}
