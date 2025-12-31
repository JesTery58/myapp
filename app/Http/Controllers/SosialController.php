<?php

namespace App\Http\Controllers;

use App\Sosial;
use App\sosialmedia;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

class SosialController extends AdminbaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $sosials=Sosial::all();
        return view("admin/sosial-setting/index" ,['sosials'=> $sosials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  sosialmedia  $sosialmedia
     * @return Response
     */
    public function show(sosialmedia $sosialmedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  sosialmedia  $sosialmedia
     * @return Response
     */
    public function update( $id , Request $request )
    {
        $sosial_settings    = Sosial::find($id);
        if ($request->isMethod('POST')) {

            $validator = Validator::make($request->all(), [

                'name' => 'required',
                //'code' => 'required',
                'url' => 'required',
                //'logo' => 'required',
                //'favicon' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect('/admin/sosial-setting/update/'.$id.'')
                    ->withErrors($validator)
                    ->withInput();
            }

            $sosial_settings->name = $request->get('name');
            $sosial_settings->code = $request->get('code');
            $sosial_settings->status = $request->get('status');
            $sosial_settings->url = $request->get('url');
            $sosial_settings->save();
            return redirect('admin/sosial-setting/')->with('status', 'İşleminiz Başarılı');


        }


        return view("admin/sosial-setting/update" , [ 'sosial' => $sosial_settings ,  'id' => $id]  );
    }

    public function create(  Request $request )
    {

        if ($request->isMethod('POST')) {

            $validator = Validator::make($request->all(), [

                'name' => 'required',
                //'code' => 'required',
                'url' => 'required',
                //'logo' => 'required',
                //'favicon' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect('/admin/sosial-setting/create')
                    ->withErrors($validator)
                    ->withInput();
            }
            $sosial_settings    = new Sosial;
            $sosial_settings->name = $request->get('name');
            $sosial_settings->code = $request->get('code');
            $sosial_settings->status = $request->get('status');
            $sosial_settings->url = $request->get('url');
            $sosial_settings->save();
            return redirect('admin/sosial-setting/')->with('status', 'İşleminiz Başarılı');


        }


        return view("admin/sosial-setting/create");
    }
    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  sosialmedia  $sosialmedia
     * @return Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  sosialmedia  $sosialmedia
     * @return Response
     */
    public function delete($id)
    {
        $supplier = Sosial::destroy($id);
        return redirect('admin/sosial-setting')->with('status', 'Kayıt başarı ile silindi.');
    }
}
