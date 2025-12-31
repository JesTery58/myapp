<?php

namespace App\Http\Controllers;

use App\contact;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

class SliderController extends AdminbaseController
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
        $slider=Slider::all();
        return view("admin/slider/index",[ 'slider'=> $slider] );
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
                return redirect('/admin/slider/create')
                    ->withErrors($validator)
                    ->withInput();
            }

            $slider = new Slider;
            $slider->caption        = serialize($request->get('caption'));
            $slider->caption_two    = serialize($request->get('caption_two'));
            $slider->orders          = $request->get('orders');
            $slider->status         = $request->get('status');
            $slider->url            = $request->get('url');
            $slider->image          = $request->get('image');
            $slider->save();
            return redirect('admin/slider')->with('status', 'İşleminiz Başarılı');


        }


        return view("admin/slider/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */


    public function update( $id , Request $request )
    {
        $slider    = Slider::find($id);
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
                return redirect('/admin/slider/update/'.$id.'')
                    ->withErrors($validator)
                    ->withInput();
            }

            $slider->caption = serialize($request->get('caption'));
            $slider->caption_two = serialize($request->get('caption_two'));
            $slider->orders = $request->get('orders');
            $slider->status = $request->get('status');
            $slider->url = $request->get('url');
            $slider->image = $request->get('image');
            $slider ->save();
            return redirect('admin/slider/')->with('status', 'İşleminiz Başarılı');


        }


        return view("admin/slider/update" , [ 'slider' => $slider ,  'id' => $id]  );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  contact  $contact
     * @return Response
     */
    public function delete($id)
    {
        $slider = Slider::destroy($id);
        return redirect('admin/slider')->with('status', 'Kayıt başarı ile silindi.');
    }
}
