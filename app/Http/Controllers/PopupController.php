<?php

namespace App\Http\Controllers;

use App\Popup;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PopupController extends AdminbaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if($request->isMethod('POST')){
        $popupssave =Popup::find(1);
        $popupssave->title = serialize($request->get('title'));
        $popupssave->status = $request->get('status');
        $popupssave->viewnumber = $request->get('viewnumber');
        $popupssave->image = $request->get('image');
        $popupssave->returnurl = $request->get('returnurl');
        $popupssave->save();

        }
        $popups = Popup::all();
        //dump($popups);die();
        return view('admin/generalsetting/popup',[
            'popups'=> $popups,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

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
     * @param Popup $popup
     * @return Response
     */
    public function show(Popup $popup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Popup $popup
     * @return Response
     */
    public function edit(Popup $popup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Popup $popup
     * @return Response
     */
    public function update(Request $request, Popup $popup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Popup $popup
     * @return Response
     */
    public function destroy(Popup $popup)
    {
        //
    }
}
