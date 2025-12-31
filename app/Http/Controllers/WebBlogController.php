<?php
namespace App\Http\Controllers;
use  DB;
use App\Http\Controllers\Auth\LoginController;
use App\Category;
use App\Blog;
use App\Page;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;


class WebBlogController extends BaseController
{

    public function Blogalllist()
    {
        $blogs          = Blog::leftJoin('categories', function($join) {
            $join->on('blogs.category_id', '=', 'categories.seo_url');
        })
            ->get([
                'blogs.id',
                'blogs.caption',
                'blogs.caption_two',
                'blogs.status',
                'blogs.orders',
                'blogs.image',
                'blogs.seo_url as blog_seo_url',
                'blogs.created_at as blogdate',
                'categories.name',
                'categories.seo_url as cateseo_url',


            ]);
        $pagesinfos     = Page::where('seo_url' , 'blog')->get();
        if($blogs->count() == 0 ){
            return redirect('errorpage/401');
        }
        foreach ($pagesinfos as $pagesinfo){
            $title          = $pagesinfo->title;
            $description    = $pagesinfo->description;
            $keywords       = $pagesinfo->keywords;
        }
        return view("blog/list",[
            'blogs'             => $blogs ,
            'title'             => $title,
            'description'       => $description,
            'keywords'          => $keywords
        ]);
    }
    // Blog


    public function Blogcategorylist( $category, Request $request )
    {

        $blogs          = DB::table('blogs')
            ->join('categories','blogs.category_id', '=','categories.seo_url')
            ->select('blogs.id',
                'blogs.caption',
                'blogs.caption_two',
                'blogs.status',
                'blogs.orders',
                'blogs.image',
                'blogs.seo_url as blog_seo_url',
                'blogs.created_at as blogdate',
                'categories.name',
                'categories.seo_url as cateseo_url')
              ->where('categories.seo_url' , $category)
              ->get();
        //dump($blogs);die();
        $pagesinfos     =Page::where('seo_url' , 'blog')->get();
        if($blogs->count() == 0 ){
            return redirect('errorpage/401');
        }
        foreach ($pagesinfos as $pagesinfo){
            $title          = $pagesinfo->title ?? '';
            $description    = $pagesinfo->description ?? '';
            $keywords       = $pagesinfo->keywords ?? '';
        }
        return view("blog/index",[
            'blogs'             => $blogs ,
            'title'             => $title,
            'description'       => $description,
            'keywords'          => $keywords,
            'category'          => $category,
        ]);
    }


    public function Blogdetail( $category , $seo_url , Request $request)
    {
        $blogs          = DB::table('blogs')
            ->join('categories','blogs.category_id', '=','categories.seo_url')
            ->select('blogs.id',
                'blogs.caption',
                'blogs.caption_two',
                'blogs.status',
                'blogs.orders',
                'blogs.image',
                'blogs.title',
                'blogs.conment',
                'blogs.description',
                'blogs.keywords',
                'blogs.seo_url as blog_seo_url',
                'blogs.created_at as blogdate',
                'categories.name',
                'categories.seo_url as cateseo_url')
            ->where('categories.seo_url' , $category)
            ->where('blogs.seo_url' , $seo_url)
            ->get();
            if($blogs->count() == 0 ){
                return redirect('errorpage/401');
            }
        foreach ($blogs as $blogdetail){
            $title          = $blogdetail->title ? : '';
            $description    = $blogdetail->description ? :'';
            $keywords       = $blogdetail->keywords ? :'';
        }

        return view("blog/detail", [
            'blogdetails'       => $blogs ,
            'title'             => $title,
            'description'       => $description,
            'keywords'          => $keywords,
            'category'          => $category,
        ]  );
    }

}
