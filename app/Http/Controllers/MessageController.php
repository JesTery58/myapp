<?php

namespace App\Http\Controllers;

use App\catagory;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Mail;
use Validator;
use App\Http\Requests;

class MessageController extends AdminbaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index( $type )
    {
        $messages = Message::where( 'type' , $type)->get();
        return view("admin/message/index", [ 'messages' => $messages , 'type'=> $type] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function detail($type , $id )
    {

        $messages    = Message::find($id);
        return view("admin/message/detail" , [  'messages' => $messages, 'type'=>$type , 'id'=> $id ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  catagory  $catagory
     * @return Response
     */
    public function reply()
    {
        $data = array('name'=>"Virat Gandhi");

        Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('rdemir@bobsogutma.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
            $message->from('rdemir@bobsogutma.com','Virat Gandhi');
        });
        return view("admin/message/reply" , [  'messages' => $messages, 'type'=>$type , 'id'=> $id ]);
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
     * @param  Request  $request
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
        $category = Message::destroy($id);
        return redirect('admin/messages/'.$type.'')->with('status', 'Kayıt başarı ile silindi.');
    }
}
