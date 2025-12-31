@extends('layouts.app')
<style>
    pre {
        display: block;
        unicode-bidi: embed;
        font-family: monospace;
        white-space: pre;
    }
</style>
@section('content')
    <?php
    function turkishcharacters( $string )
    {
        $string = str_replace ( '&ccedil;', 'ç', $string );
        $string = str_replace ( '&yacute;','ı',$string );
        $string = str_replace ( '&Ccedil;', 'Ç', $string );
        $string = str_replace ( '&Ouml;', 'Ö', $string );
        $string = str_replace ( '&Yacute;', 'Ü', $string );
        $string = str_replace ( '&ETH;','Ğ',$string );
        $string = str_replace ( '&THORN;','Ş', $string );
        $string = str_replace ( '&Yacute;','İ', $string );
        $string = str_replace ( '&ouml;','ö', $string );
        $string = str_replace ( '&thorn;','ş', $string );
        $string = str_replace ( '&eth;','ğ', $string );
        $string = str_replace ( '&uuml;','ü', $string );
        $string = str_replace ( '&yacute;','ı', $string );
        $string = str_replace ( '&amp;','&', $string );

        return $string;
    }


    ?>
@foreach($blogdetails as $blogdetail)
    <div class="header-base bg-cover" style="background-image:url({{ asset('assets/images/bg-10.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <h1 style="color:#fff">{{isset(unserialize($blogdetail->caption)[$lang]) ? unserialize($blogdetail->caption)[$lang] : ''}}</h1>
                        <p style="color:#fff">{{ isset(unserialize($blogdetail->caption_two)[$lang]) ? unserialize($blogdetail->caption_two)[$lang] : '' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- START PAGE BANNER AND BREADCRUMBS -->
    <div class="section-empty section-item">
        <div class="container content">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="grid-list one-row-list">
                        <div class="grid-box row">
                            <a class="img-box" href="javascript:void(0)" style="max-height: 350px;">
                                <img src="{{asset(''.$blogdetail->image.'')}}" alt="">
                            </a>

                            <hr>
                            <div style="min-height: 500px">
                                <p style="text-align: justify;text-indent: 50px;">
                                    {{ trim(trim(turkishcharacters(isset(unserialize($blogdetail->conment)[$lang]) ? unserialize($blogdetail->conment)[$lang] : '') ,'<p>'),'</p>') }}
                                </p>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-md-3 col-sm-12 widget">
                    <div class="list-group list-blog">
                        <p class="list-group-item active">{{__('words.blogcategory')}}</p>
                        @foreach($blogCategory as $blogCat)
                            @if($blogCat->status == 1)
                            <a href="{{ url('blog/'.$blogCat->seo_url.'')}}" class="list-group-item">{{ isset(unserialize($blogCat->name)[$lang]) ? unserialize($blogCat->name)[$lang] : '' }}</a>
                        @endif
                                @endforeach
                    </div>

                    <div class="list-group list-blog">
                        <p class="list-group-item active">{{__('words.blogsoneklenen')}}</p>
                        @foreach($bloglatest as $bloglates)
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="img-box circle">
                                            <img src="{{asset(''.$bloglates->image.'')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <a href="{{ url('/blog/'.$category.'/'.$bloglates->blog_seo_url.'') }}">
                                            <h5>{{ isset(unserialize( $bloglates->caption)[$lang]) ? unserialize( $bloglates->caption)[$lang] : '' }}</h5>
                                        </a>
                                        <div class="tag-row icon-row"><span><i class="fa fa-calendar"></i>{{$bloglates->created_at}}</span></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE BANNER AND BREADCRUMBS -->
@endforeach
@endsection
