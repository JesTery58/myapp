<?php

namespace App\Http\Controllers;

use App\contact;
use App\language;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Validator;

class LanguageController extends AdminbaseController
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

               return view("admin/language-setting/index" );
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

                'name' => 'required',
                'code' => 'required',
                'image' => 'required',
                //'logo' => 'required',
                //'favicon' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect('/admin/language-setting/create')
                    ->withErrors($validator)
                    ->withInput();
            }

            $language_setting = new language;
            $language_setting->name = $request->get('name');
            $language_setting->code = $request->get('code');
            $language_setting->image = $request->get('image');
            $language_setting->status = $request->get('status');
            $language_setting->save();
            return redirect('admin/language-setting')->with('status', 'İşleminiz Başarılı');


        }


        return view("admin/language-setting/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */


    public function update( $id , Request $request )
    {
        if ($request->isMethod('POST')) {

            $validator = Validator::make($request->all(), [

                'name' => 'required',
                'code' => 'required',
                'image' => 'required',
                //'logo' => 'required',
                //'favicon' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect('/admin/language-setting/update/'.$id.'')
                    ->withErrors($validator)
                    ->withInput();
            }
            $languages_settings    = language::find($id);
            $languages_settings->name = $request->get('name');
            $languages_settings->code = $request->get('code');
            $languages_settings->image = $request->get('image');
            $languages_settings->save();
            return redirect('admin/language-setting/')->with('status', 'İşleminiz Başarılı');


        }

        $la    = language::find($id);
        return view("admin/language-setting/update" , [ 'languages_setting' => $la ,  'id' => $id]  );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  contact  $contact
     * @return Response
     */
    public function delete($id)
    {
        $supplier = language::destroy($id);
        return redirect('admin/language-setting')->with('status', 'Kayıt başarı ile silindi.');
    }

    public function langedit(Request $request , $id)
    {
        if($request->isMethod('POST')){

            File::put(resource_path('lang/'.$id.'/words.php'), $request->get('roboticerik'));
        }
        return view('admin/language-setting/langedit',[
            'id'=> $id,
        ]);

    }
}
