@extends('layouts.app')

@section('content')
    <div class="section-slider row-19">
        <div class="flexslider visible-dir-nav advanced-slider slider" data-options="animation:fade">
            <ul class="slides">
                @foreach($sliders as $slider)
                <li data-slider-anima="fade-bottom" data-time="1000" data-timeline="desc">
                    <div class="section-slide">
                        <div class="bg-cover" style="background-image:url({{ asset('assets/images/bg-3.jpg') }})">
                        </div>
                        <div class="container">
                            <img class="anima pos-slider  pos-right"  src="{{ asset(''.$slider->image.'') }}" alt="" />
                            <div class="container-middle">
                                <div class="container-inner text-left">
                                    <div class="row anima anima-fade-left">
                                        <div class="col-md-6 col-sm-12">
                                            <hr class="space visible-sm" />
                                            <h2 class="text-light text-xl">{{ unserialize($slider->caption )[$lang] ?? '' }}</h2>
                                            <hr class="space xs" />
                                            <p class="font-2">
                                                {{ unserialize($slider->caption_two )[$lang] ?? "" }}
                                            </p>
                                            <!--
                                            <hr class="space s" />
                                            <a href="{{ $slider->url }}" class="btn btn-sm">{{ __('words.more')}}</a><span class="space"></span>
                                            <a href="{{ url('contact') }}" class="btn btn-border btn-sm">{{ __('words.hemenara')}}</a>
                                            --->
                                            <hr class="space s" />
                                            <hr class="space visible-sm" />
                                            <hr class="space visible-sm" />
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach


            </ul>
        </div>
    </div>
    <div class="section-bg-color">
        <div class="container content">
            <div class="row">
                <div class="col-md-4">
                    <div class="advs-box advs-box-side-icon" data-anima="scale-up" data-trigger="hover">
                        <div class="icon-box">
                            <i class="im-clouds icon anima" aid="0.7907408332735115" style="position: relative; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;"></i>
                        </div>
                        <div class="caption-box">
                            <h3>{{__('words.get1a')}}</h3>
                            <p>
                                {{__('words.get1b')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advs-box advs-box-side-icon" data-anima="scale-up" data-trigger="hover">
                        <div class="icon-box">
                            <i class="im-big-data icon anima" aid="0.914441078706655" style="position: relative; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;"></i>
                        </div>
                        <div class="caption-box">
                            <h3>{{__('words.get2a')}}</h3>
                            <p>
                                {{__('words.get2b')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advs-box advs-box-side-icon" data-anima="scale-up" data-trigger="hover">
                        <div class="icon-box">
                            <i class="im-bird-deliveringletter icon anima"></i>
                        </div>
                        <div class="caption-box">
                            <h3>{{__('words.get3a')}}</h3>
                            <p>
                                {{__('words.get3b')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-bg-image" style="background-image:url({{ asset("assets/images/background1.jpg") }})">

        <div class="container content">
            <div class="row vertical-row">

                <div class="col-md-8">
                    <hr class="space m">
                    <p class="block-quote quote-1" style="color: #fbfbfb;">
                        {{__('words.get4b')}}
                        <span class="quote-author" style="color: #fbfbfb;"></span>
                    </p>
                    <hr class="space m">
                </div>
                <div class="col-md-4">
                    <hr class="space m">
                    <img src="{{ asset('assets/images/gallery/image-10.png') }}" class="shadow-2" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="section-bg-image" style="background-image:url({{ asset('assets/images/worldmap.png') }})">
        <div class="container content text-center">
            <h4 style="font-weight: 600;">{{__('words.product_groups')}}</h4>
            <div class="maso-list gallery">
                <div class="maso-box row " style="position: relative; height: 450px;">
                    <div data-sort="1" class="maso-item col-md-4 cat1 card-1" style="position: absolute; left: 0%; top: 0px; visibility: visible;">
                        <a href="{{ url('search?p=Sertprofiller') }}">
                            <div class="img-box adv-img adv-img-down-text" style="opacity: 1;">


                                <img src="{{ asset("assets/images/gallery/image-1.png") }}" style="position: relative;width: 350px;height: 275px;object-fit: fill;">

                                <div class="caption-bottom">
                                    <h2 style="font-size: 29px;padding: 10px;border-bottom: 3px solid #6fce65;font-weight: 500;">
                                        {{__('words.a1')}}</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div data-sort="1" class="maso-item col-md-4 cat2 card-1" style="position: absolute; left: 0%; top: 0px; visibility: visible;">
                        <a href="{{ url('search?p=PVCContalar') }}"> <div class="img-box adv-img adv-img-down-text" style="opacity: 1;">


                                <img src="{{ asset("assets/images/gallery/image-2.png") }}" style="position: relative;width: 350px;height: 275px;object-fit: fill;">

                                <div class="caption-bottom">
                                    <h2 style="font-size: 29px;padding: 10px;border-bottom: 3px solid #6fce65;font-weight: 500;">
                                        {{__('words.a2')}}</h2>
                                </div>
                            </div></a>
                    </div>
                    <div data-sort="1" class="maso-item col-md-4 cat3 card-1" style="position: absolute; left: 0%; top: 0px; visibility: visible;">
                        <a href="{{ url('search?p=EPDMContalar') }}">
                            <div class="img-box adv-img adv-img-down-text" style="opacity: 1;">


                                <img src="{{ asset("assets/images/gallery/image-3.png") }}" style="position: relative;width: 350px;height: 275px;object-fit: fill;">

                                <div class="caption-bottom">
                                    <h2 style="font-size: 29px;padding: 10px;border-bottom: 3px solid #6fce65;font-weight: 500;">
                                        {{__('words.a3')}}</h2>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <!---
    <div class="section-bg-color">
        <div class="container content text-center">
            <h4>{{__('words.referanslar')}}</h4>
            <div class="flexslider carousel outer-navs png-over text-center no-navs" data-options="numItems:5,minWidth:100,itemMargin:30,controlNav:false,directionNav:false">

                <div class="flex-viewport" style="overflow: hidden; position: relative">
                    <ul class="slides" style="width: 2000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);;height: 50px">
                        <li style="padding-right: 30px; width: 234px; float: left; display: block;">
                            <a class="img-box" href="#">
                                <img src="{{ asset("assets/images/logos/logo_1.png") }}" alt="" draggable="false">
                            </a>
                        </li>
                        <li style="padding-right: 30px; width: 234px; float: left; display: block;">
                            <a class="img-box" href="#">
                                <img src="{{ asset("assets/images/logos/logo_1.png") }}" alt="" draggable="false">
                            </a>
                        </li>
                        <li style="padding-right: 30px; width: 234px; float: left; display: block;">
                            <a class="img-box" href="#">
                                <img src="{{ asset("assets/images/logos/logo_1.png") }}" alt="" draggable="false">
                            </a>
                        </li>
                        <li style="padding-right: 30px; width: 234px; float: left; display: block;">
                            <a class="img-box" href="#">
                                <img src="{{ asset("assets/images/logos/logo_1.png") }}" alt="" draggable="false">
                            </a>
                        </li>
                        <li style="padding-right: 30px; width: 234px; float: left; display: block;">
                            <a class="img-box" href="#">
                                <img src="{{ asset("assets/images/logos/logo_1.png") }}" alt="" draggable="false">
                            </a>
                        </li>
                        <li style="padding-right: 30px; width: 234px; float: left; display: block;">
                            <a class="img-box" href="#">
                                <img src="{{ asset("assets/images/logos/logo_1.png") }}" alt="" draggable="false">
                            </a>
                        </li>

                    </ul></div></div>
        </div>
    </div>--->
    <div class="section-empty no-paddings-y" style="background:#f7f7f7" >
        <div class="container content">
            <div class="row vertical-row">

                <div class="col-md-6 col-sm-6">
                    <hr class="space visible-sm">
                    <h4>{{__('words.a4')}}</h4>
                    <p>
                        {{__('words.a5')}}
                    </p>
                    <hr class="space s">
                    <div class="grid-list gallery">
                        <div class="grid-box row" data-lightbox-anima="fade-top">
                            <div class="grid-item col-md-4 col-sm-4" style="border: 2px solid #d3d3d3;border-radius: 4px;">
                                <a class="img-box i-center" href="{{ asset("assets/images/gallery/image-14.jpg")}}">
                                    <i class="fa fa-camera"></i>
                                    <img src="{{ asset("assets/images/gallery/image-14.jpg")}}" alt="">
                                </a>
                            </div>
                            <div class="grid-item col-md-4 col-sm-4" style="border: 2px solid #d3d3d3;border-radius: 4px;">
                                <a class="img-box i-center" href="{{ asset("assets/images/gallery/image-15.jpg")}}">
                                    <i class="fa fa-film"></i>
                                    <img src="{{ asset("assets/images/gallery/image-15.jpg")}}" alt="">
                                </a>
                            </div>
                            <div class="grid-item col-md-4 col-sm-4" style="border: 2px solid #d3d3d3;border-radius: 4px;">
                                <a class="img-box i-center" href="{{ asset("assets/images/gallery/image-16.jpg")}}">
                                    <i class="fa fa-camera"></i>
                                    <img src="{{ asset("assets/images/gallery/image-16.jpg")}}" alt="">
                                </a>
                            </div>
                            <div class="grid-item col-md-4 col-sm-4" style="border: 2px solid #d3d3d3;border-radius: 4px;">
                                <a class="img-box i-center" href="{{ asset("assets/images/gallery/image-17.jpg")}}">
                                    <i class="fa fa-camera"></i>
                                    <img src="{{ asset("assets/images/gallery/image-17.jpg")}}" alt="">
                                </a>
                            </div>
                            <div class="grid-item col-md-4 col-sm-4" style="border: 2px solid #d3d3d3;border-radius: 4px;">
                                <a class="img-box i-center" href="{{ asset("assets/images/gallery/image-18.jpg")}}">
                                    <i class="fa fa-camera"></i>
                                    <img src="{{ asset("assets/images/gallery/image-18.jpg")}}" alt="">
                                </a>
                            </div>
                            <div class="grid-item col-md-4 col-sm-4" style="border: 2px solid #d3d3d3;border-radius: 4px;">
                                <a class="img-box i-center" href="{{ asset("assets/images/gallery/image-19.jpg")}}">
                                    <i class="fa fa-camera"></i>
                                    <img src="{{ asset("assets/images/gallery/image-19.jpg")}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr class="space m">
                    <!--
                    <a href="about-2.html" class="circle-button btn btn-sm">{{__('words.more')}}</a><span class="space"></span>
                    <a href="contacts-1.html" class="btn-text">{{__('words.hemenara')}}</a>-->
                </div>
                <div class="col-md-6  col-sm-6 text-right">
                    <hr class="space">
                    <img src="{{ asset("assets/images/avatar-4.png")}}" alt="">
                </div>
            </div>

            <div class="col-md-12">


    </div>
    <i class="scroll-top scroll-top-mobile fa fa-arrow-up"></i>


@endsection
