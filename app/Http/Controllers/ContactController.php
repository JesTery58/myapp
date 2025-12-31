<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Language;
use Illuminate\Http\Response;
use Validator;
use Illuminate\Http\Request;


class ContactController extends AdminbaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $contact_settings    =Contact::all();
        return view("admin/contact-setting/contact-setting" , [ 'contact_settings' => $contact_settings ] );
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

                'address' => 'required',
                'phone' => 'required',
                'mail' => 'required',
                //'logo' => 'required',
                //'favicon' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect('/admin/contact-setting/create')
                    ->withErrors($validator)
                    ->withInput();
            }

            $contact_setting = new Contact;
            $contact_setting->name = serialize($request->get('name'));
            $contact_setting->address = $request->get('address');
            $contact_setting->phone = $request->get('phone');
            $contact_setting->phone_2 = $request->get('phone_2');
            $contact_setting->phone_3 = $request->get('phone_3');
            $contact_setting->mail = $request->get('mail');
            $contact_setting->mail_2 = $request->get('mail_2');
            $contact_setting->map = $request->get('map');
            $contact_setting->save();
            return redirect('admin/contact-setting')->with('status', 'İşleminiz Başarılı');


        }

        $languages           =Language::all();
        return view("admin/contact-setting/create" , [ 'languages' => $languages ]  );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */


    public function update( $id , Request $request )
    {
        $contact_settings    = Contact::find($id);


        if ($request->isMethod('POST')) {

            $validator = Validator::make($request->all(), [

                'address' => 'required',
                'phone' => 'required',
                'mail' => 'required',
                //'logo' => 'required',
                //'favicon' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect('/admin/contact-setting/update/')
                    ->withErrors($validator)
                    ->withInput();
            }

            $contact_settings->name = serialize($request->get('name'));
            $contact_settings->address = $request->get('address');
            $contact_settings->phone = $request->get('phone');
            $contact_settings->phone_2 = $request->get('phone_2');
            $contact_settings->phone_3 = $request->get('phone_3');
            $contact_settings->mail = $request->get('mail');
            $contact_settings->mail_2 = $request->get('mail_2');
            $contact_settings->map = $request->get('map');
            $contact_settings->save();
            return redirect('admin/contact-setting')->with('status', 'İşleminiz Başarılı');


        }


        return view("admin/contact-setting/update" , [ 'contact_settings' => $contact_settings , 'id' => $id ]  );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contact  $contact
     * @return Response
     */
    public function delete($id)
    {
        $supplier = Contact::destroy($id);
        return redirect('admin/contact-setting')->with('status', 'Kayıt başarı ile silindi.');
    }
}
