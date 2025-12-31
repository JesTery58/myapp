<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AramaController extends BaseController
{
    //
    public  function index(Request $request ){
        if($request->isMethod('GET')){
            $searchTerm = $request->get('p');
            if($searchTerm == 'Sertprofiller'){
                $products = Product::where('code', 'like', 'sp%')
                ->where('status','=', 1)
                ->orderby('code','ASC')
                ->get();
                $count=count($products);
                //dump($count);die();
            }elseif($searchTerm == 'PVCContalar'){
                $products = Product::where('code', 'like', 'P%')
                ->where('status','=', 1)
                ->orderby('code','ASC')
                ->get();
                $count=count($products);
                //dump($count);die();
            }elseif($searchTerm == 'EPDMContalar'){
                $products = Product::where('code', 'like', 'K%')
                ->where('status','=', 1)
                ->orderby('code','ASC')
                ->get();
                $count=count($products);
                //dump($count);die();
            }else{

                $products = Product::where('code', 'like', '%'.$searchTerm.'%')
                    ->where('status','=', 1)
                    ->orwhere('caption', 'like', '%'.$searchTerm.'%')
                    ->orderby('code','ASC')
                    ->get();
                $count=count($products);
                //dump($count);die();
            }

             }
        return view('search/index',[
            'results'   =>     $products,
            'title'   =>     '',
            'description'   =>     '',
            'keywords'   =>     '',
            'searchTerm'   =>     $searchTerm,
            'count'   =>     $count,
        ]);
    }
}
