
@extends('layouts.app')

@section('content')
    <div class="header-base bg-cover" style="background-image:url({{ asset('assets/images/bg-10.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <h1 style="color:#fff">{{__('words.aboutus')}}</h1>
                        <p style="color:#fff">{{__('words.aboutus2')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-bg-color section-item">
        <div class="container content">
            <h4>{{__('words.baslik')}}</h4>
            <div class="row">
                <div class="col-md-6">
                    <p style="text-align: justify;">
                        {{__('words.paragraf1')}}
                    </p>

                    <hr class="space m" />
                    <hr class="" />
                    <div class="row">
                        <div class="col-md-4">
                            <div class="icon-box counter-box-icon">
                            <div class="icon-box-cell" style="background: #fbfbfb;min-width: 85px;">
                                    <span style="margin-left: 10px;">{{__('words.yillik')}}</span>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="counter text-m" data-speed="3000" data-to="5000000">5.000.000 </label>
                                    <p class="text-s">{{__('words.metre')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box counter-box-icon">
                                <div class="icon-box-cell" style="background: #fbfbfb;min-width: 85px;">
                                    <span style="margin-left: 10px;">{{__('words.aylik')}}</span>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="counter text-m" data-speed="3000" data-to="400000">400.000</label>
                                    <p class="text-s">{{__('words.metre')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box counter-box-icon">
                            <div class="icon-box-cell" style="background: #fbfbfb;min-width: 85px;">
                                    <span style="margin-left: 10px;">{{__('words.gunluk')}}</span>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="counter text-m" data-speed="3000" data-to="12500">12.500</label>
                                    <p class="text-s">{{__('words.metre')}}</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <p></p>
                        <p></p>
                        <h4 style="text-align: -webkit-center;font-size: 22px;margin-bottom: 0px;margin-top: 35px;">{{__('words.contaveprofil')}}</h4>
                    </div>
                    <hr class="" />
                </div>
                <div class="col-md-6">
                    <p style="text-align: justify;">
                        {{__('words.paragraf2')}}
                    </p>
                    <hr class="space m" />

                </div>
            </div>
        </div>
    </div>

    <div class="section-empty">
        <div class="container content olcu1">
            <div class="row" style="    height: 110px;">
                <div class="col-md-6 col-sm-12" data-anima="fade-left">
                    <div class="flexslider carousel" data-options="controlNav:true,directionNav:false" style="height: 200px;">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox" href="{{ asset('assets/images/gallery/image-6.jpg') }}" data-lightbox-anima="fade-left">
                                    <img src="{{ asset('assets/images/gallery/image-6.jpg') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="{{ asset('assets/images/gallery/image-7.jpg') }}" data-lightbox-anima="fade-left">
                                    <img src="{{ asset('assets/images/gallery/image-7.jpg') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="{{ asset('assets/images/gallery/image-8.jpg') }}" data-lightbox-anima="fade-left">
                                    <img src="{{ asset('assets/images/gallery/image-8.jpg') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="{{ asset('assets/images/gallery/image-9.jpg') }}" data-lightbox-anima="fade-left">
                                    <img src="{{ asset('assets/images/gallery/image-9.jpg') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="{{ asset('assets/images/gallery/image-10.jpg') }}../images/gallery/image-10.jpg" data-lightbox-anima="fade-left">
                                    <img src="{{ asset('assets/images/gallery/image-10.jpg') }}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" data-anima="fade-right">
                    <p class="block-quote quote-1" style="text-align: justify;font-size: 17px;line-height: 23px;">
                        {{__('words.slogan1')}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--
    <div class="section-empty section-item">
        <div class="container content">
            <table class="grid-table border-table" data-anima="" data-timeline="asc">
                <tbody>
                <tr>
                    <td><img class="anima fade-bottom" src="{{ asset('assets/images/logos/logo_1.png') }}" data-toggle="tooltip" data-placement="top" title="" alt="" data-original-title="Magestic Silver" aid="0.7793224694909846" style="position: relative; animation-duration: 3000ms; transition-timing-function: ease; transition-delay: 0ms;"></td>
                    <td><img class="anima fade-bottom" src="{{ asset('assets/images/logos/logo_2.png') }}" data-toggle="tooltip" data-placement="top" title="" alt="" data-original-title="Magestic Silver" aid="0.7793224694909846" style="position: relative; animation-duration: 3000ms; transition-timing-function: ease; transition-delay: 0ms;"></td>
                    <td><img class="anima fade-bottom" src="{{ asset('assets/images/logos/logo_3.png') }}" data-toggle="tooltip" data-placement="top" title="" alt="" data-original-title="Magestic Silver" aid="0.7793224694909846" style="position: relative; animation-duration: 3000ms; transition-timing-function: ease; transition-delay: 0ms;"></td>
                    <td><img class="anima fade-bottom" src="{{ asset('assets/images/logos/logo_4.png') }}" data-toggle="tooltip" data-placement="top" title="" alt="" data-original-title="Magestic Silver" aid="0.7793224694909846" style="position: relative; animation-duration: 3000ms; transition-timing-function: ease; transition-delay: 0ms;"></td>

                </tr>
                <tr>
                    <td><img class="anima fade-bottom" src="{{ asset('assets/images/logos/logo_5.png') }}" data-toggle="tooltip" data-placement="top" title="" alt="" data-original-title="Magestic Silver" aid="0.7793224694909846" style="position: relative; animation-duration: 3000ms; transition-timing-function: ease; transition-delay: 0ms;"></td>
                    <td><img class="anima fade-bottom" src="{{ asset('assets/images/logos/logo_6.png') }}" data-toggle="tooltip" data-placement="top" title="" alt="" data-original-title="Magestic Silver" aid="0.7793224694909846" style="position: relative; animation-duration: 3000ms; transition-timing-function: ease; transition-delay: 0ms;"></td>
                    <td><img class="anima fade-bottom" src="{{ asset('assets/images/logos/logo_7.png') }}" data-toggle="tooltip" data-placement="top" title="" alt="" data-original-title="Magestic Silver" aid="0.7793224694909846" style="position: relative; animation-duration: 3000ms; transition-timing-function: ease; transition-delay: 0ms;"></td>
                    <td><img class="anima fade-bottom" src="{{ asset('assets/images/logos/logo_8.png') }}" data-toggle="tooltip" data-placement="top" title="" alt="" data-original-title="Magestic Silver" aid="0.7793224694909846" style="position: relative; animation-duration: 3000ms; transition-timing-function: ease; transition-delay: 0ms;"></td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>--->
    <i class="scroll-top scroll-top-mobile fa fa-sort-asc"></i>

    @endsection
