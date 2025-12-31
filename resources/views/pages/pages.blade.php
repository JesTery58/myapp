
@extends('layouts.app')

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
    <div class="header-base bg-cover" style="background-image:url({{ asset('assets/images/bg-10.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <h1 style="color:#fff">{{ unserialize($caption)[$lang] }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-bg-color section-item">
        <div class="container content">
            <div class="row">
                {!! html_entity_decode(isset(unserialize( $comment)[$lang]) ? unserialize( $comment)[$lang] : '')  !!}


            </div>
        </div>
    </div>

    @endsection
