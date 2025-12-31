<?php

namespace App\Http\Controllers;
use App\contact;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

class PageController extends AdminbaseController
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
        $pages=Page::all();
        return view("admin/pages/index",[ 'pages'=> $pages ]  );
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
                return redirect('/admin/pages/create')
                    ->withErrors($validator)
                    ->withInput();
            }

            $pages = new Page;
            $pages->seo_url        = str_slug($request->get('caption')['tr'],'-');
            $pages->caption        = serialize($request->get('caption'));
            $pages->caption_two    = serialize($request->get('caption_two'));
            $pages->orders          = $request->get('orders');
            $pages->status         = $request->get('status');
            $pages->comment        = serialize($request->get('comment'));
            $pages->image          = $request->get('image');
            $pages->module          = $request->get('modul');
            $pages->title          =  serialize($request->get('title'));
            $pages->description    =  serialize($request->get('description'));
            $pages->keywords       =  serialize($request->get('keywords'));
            $pages->save();
            return redirect('admin/pages')->with('status', 'İşleminiz Başarılı');


        }


        return view("admin/pages/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */


    public function update( $id , Request $request )
    {
        $pages    = Page::find($id);
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
                return redirect('/admin/pages/update/'.$id.'')
                    ->withErrors($validator)
                    ->withInput();
            }

            $pages->seo_url        = str_slug($request->get('caption')['tr'],'-');
            $pages->caption        = serialize($request->get('caption'));
            $pages->caption_two    = serialize($request->get('caption_two'));
            $pages->orders         = $request->get('orders');
            $pages->status         = $request->get('status');
            $pages->comment        = serialize($request->get('comment'));
            $pages->image          = $request->get('image');
            $pages->module          = $request->get('modul');
            $pages->title          =  serialize($request->get('title'));
            $pages->description    =  serialize($request->get('description'));
            $pages->keywords       =  serialize($request->get('keywords'));
            $pages ->save();
            return redirect('admin/pages')->with('status', 'İşleminiz Başarılı');


        }


        return view("admin/pages/update" , [ 'page' => $pages ,  'id' => $id ]  );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  contact  $contact
     * @return Response
     */
    public function delete($id)
    {
        $page = Page::destroy($id);
        return redirect('admin/pages')->with('status', 'Kayıt başarı ile silindi.');
    }



}
