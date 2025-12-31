<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ unserialize($title)[$lang] }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ unserialize($description)[$lang] }}">
    <meta name="author" content="{{ $generalsettings->company1 }}">
    <meta name="keywords" content="{{ unserialize($keywords)[$lang] }}">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <!--Fonts--->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- Vendor styles -->
    <script src="{{ asset('assets/scripts/jquery.min.js' )}}"></script>
    <link rel="stylesheet" href="{{ asset('assets/scripts/bootstrap/css/bootstrap.css' )}}">
    <script src="{{ asset('assets/scripts/script.js' )}}"></script>
    <link rel="stylesheet" href="{{ asset('assets/style.css' )}}">
    <link rel="stylesheet" href="{{ asset('assets/css/content-box.css' )}}">
    <link rel="stylesheet" href="{{ asset('assets/css/image-box.css' )}}">
    <link rel="stylesheet" href="{{ asset('assets/css/animations.css' )}}">
    <link rel="stylesheet" href='{{ asset('assets/css/components.css' )}}'>
    <link rel="stylesheet" href='{{ asset('assets/scripts/flexslider/flexslider.css' )}}'>
    <link rel="stylesheet" href='{{ asset('assets/scripts/magnific-popup.css' )}}'>
    <link rel="stylesheet" href='{{ asset('assets/scripts/php/contact-form.css' )}}'>
    <link rel="stylesheet" href='{{ asset('assets/scripts/social.stream.css' )}}'>
    <link rel="stylesheet" href='{{ asset('assets/scripts/jquery.flipster.min.css' )}}'>
    <link rel="icon" href="{{ asset('assets/images/favicon.png' )}}">
    <link rel="stylesheet" href="{{ asset('assets/skin.css' )}}">


</head>
<body>

<!-- START  PRELOADER -->
<div id="preloader"></div>

<header class="fixed-top scroll-change" data-menu-anima="fade-in">
    <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
        <div class="navbar navbar-main">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ url('/')}}">
                        <img class="logo-default" src="{{ $generalsettings->logo }}" alt="logo" />
                        <img class="logo-retina" src="{{ $generalsettings->logo }}" alt="logo" />
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active mega-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="{{ url('/') }}">{{ __('words.mainpage')}}<span class="caret"></span></a>
                        </li>
                        <li class="dropdown active mega-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="about.html">Kurumsal <span class="caret"></span></a>
                        </li>
                        <li class="dropdown mega-dropdown active mega-tabs">
                            <a class="dropdown-toggle"  href="products.html">Ürünler <span class="caret"></span></a>
                            <div class="mega-menu dropdown-menu multi-level row bg-menu">
                                <div class="tab-box" data-tab-anima="fade-left">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#">Yapı Grubu</a></li>
                                        <li><a href="#">Soğutma</a></li>
                                        <li><a href="#">Sanayi</a></li>
                                    </ul>
                                    <div class="panel active">
                                        <div class="col">
                                            <h5>Çelik Kapı Contaları</h5>
                                        </div>
                                        <div class="col">
                                            <h5>Çelik Kapı Kasası</h5>
                                        </div>
                                        <div class="col">
                                            <h5>Ahşap Grubu Contası</h5>
                                        </div>
                                        <div class="col">
                                            <h5>Otomatik Kepenk Fitilleri</h5>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="col">
                                            <h5>Menteşeli Kapılar</h5>
                                            <ul class="fa-ul text-s">
                                                <li><i class="fa-li im-road"></i> <a href="#">Pervaz Profilleri</a></li>
                                                <li><i class="fa-li im-road"></i> <a href="#">Kilit ve Menteşeler</a></li>
                                                <li><i class="fa-li im-road"></i> <a href="#">Kapı Contaları</a></li>
                                                <li><i class="fa-li im-road"></i> <a href="#">Rezistans Kablo</a></li>
                                                <li><i class="fa-li im-road"></i> <a href="#">Aluminyum Profiller</a></li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <h5>Sürgülü Kapılar</h5>
                                            <ul class="fa-ul text-s">
                                                <li><i class="fa-li im-road"></i> <a href="#">Sürgülü Kapı Kasa Profilleri</a></li>
                                                <li><i class="fa-li im-road"></i> <a href="#">Aluminyum Profiller</a></li>
                                                <li><i class="fa-li im-road"></i> <a href="#">Sürgülü Kapı Contaları</a></li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <a href="#"><h5>Servis Kapısı Contaları</h5></a>
                                        </div>
                                        <div class="col">
                                            <a href="#"><h5>Buzdolabı Conta ve Profilleri</h5></a>
                                        </div>
                                        <div class="col">
                                            <a href="#"><h5>Etiketlik Profilleri</h5></a>
                                        </div>
                                        <div class="col">
                                            <a href="#"><h5>Hijyenik & Taban Profilleri</h5></a>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="col">
                                            <a href="#"><h5>Çeşitli Endüstriyel Ürünler</h5></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @foreach($blogCategory as $blogCat)
                            <li class="dropdown">
                                <a href="{{ url('/blog') }} "  class="dropdown-toggle" data-toggle="dropdown" role="button">{{ unserialize($blogCat->name)[$lang] }} <span class="caret"></span></a>
                                @if($blogCat->children ->isNotEmpty())
                                    @include ('/admin/category/blog_sub_list' , [ 'children' => $blogCat->children , 'type'=> 'blog'])
                                @endif
                            </li>
                        @endforeach
                        <li class="dropdown active mega-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="{{ url ('/contact')}}">İletişim <span class="caret"></span></a>
                        </li>

                    </ul>
                    <div class="nav navbar-nav navbar-right">
                        <div class="search-box-menu">
                            <div class="search-box scrolldown">
                                <input type="text" class="form-control" placeholder="Ürün Ara...">
                            </div>
                            <button type="button" class="btn btn-default btn-search">
                                <span class="fa fa-search"></span>
                            </button>
                        </div>
                        <ul class="nav navbar-nav lan-menu">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><img src="../images/en.png" alt="" />En<span class="caret"></span></a>
                                <ul class="dropdown-menu">

                                    @foreach($lang_lists as $lang_list)
                                        <li><a href="#" id="{{  $lang_list->code }}" onclick="changeLanguage(this.id)">{{ $lang_list->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- START HEADER SECTION -->
<header class="main-header header-1">
    <!-- START TOP AREA -->
    <div class="top-area">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="header-social">
                        <ul>
                            @foreach($sosials as $sosial)
                                <li><a href="{{ $sosial->url }}"><i class="icofont icofont-social-{{ $sosial->code }}"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="info-menu">
                        <ul>
                            <!--
                            <li><a href="#">Login </a></li>
                            <li><a href="#">Register </a></li>
                            <li><a href="#">Appinmnet </a></li>-->
                            <li><a href="{{ url ('/contact')}}">Contact </a></li>
                        </ul>
                    </div>
                </div>
                <!-- end col -->
            </div>
        </div>
    </div>
    <!-- END TOP AREA -->

    <!-- START LOGO AREA -->
    <div class="logo-area">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-7 mx-md-auto mx-sm-auto mx-auto pl-0">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img class="img-fluid" src="{{ $generalsettings->logo }}" alt="">
                        </a>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="header-info-box">
                        <div class="header-info-icon"><span class="lnr lnr-phone-handset"></span></div>
                        <p style="    margin-left: 20px;">Customer support & sales </p>
                        <h6>{{ $contacts->phone }}</h6>
                    </div>
                </div>
                <!-- end col -->
            </div>
        </div>
    </div>
    <!-- END LOGO AREA -->

    <!-- START NAVIGATION AREA -->
    <div class="sticky-menu">
        <div class="mainmenu-area">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-9 d-lg-block d-md-none d-sm-none d-none ">
                        <nav class="navbar navbar-expand-lg justify-content-left">
                            <ul class="navbar-nav">
                                <li class="active"><a href="{{ url('/') }}" class="nav-link">{{ __('words.mainpage')}}</a></li>

                                @foreach($menus as $menu)

                                    <li class="dropdown">

                                        <a href="{{ url('pages/'.$menu->seo_url) }} "class="nav-link">{{ unserialize($menu->name)[$lang] }}</a>
                                    @if($menu->children ->isNotEmpty())
                                        @include ('/admin/category/menus_sub_list' , [ 'children' => $menu->children , 'type'=> 'menus'])
                                    @endif
                                    </li>
                                @endforeach
                                <li><a href="{{ url('/product') }}" class="nav-link">{{ __('words.products') }}</a></li>

                                @foreach($blogCategory as $blogCat)
                                    <li class="dropdown">

                                        <a href="{{ url('/blog') }} "class="nav-link">{{ unserialize($blogCat->name)[$lang] }}</a>
                                    @if($blogCat->children ->isNotEmpty())
                                        @include ('/admin/category/blog_sub_list' , [ 'children' => $blogCat->children , 'type'=> 'blog'])
                                    @endif
                                    </li>
                                @endforeach
                                <li><a href="{{ url('/contact') }}" class="nav-link">{{ __('words.contact') }}</a></li>


                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-12 d-lg-block d-md-none d-none">
                        <nav class="navbar navbar-expand-lg justify-content-end">
                            <ul class="navbar-nav">
                                <li class="active dropdown quick-search"><a href="#" class="nav-link">{{ __('words.language') }} {{ $lang }}</a>
                                    <ul class="dropdown-menu">
                                        @foreach($lang_lists as $lang_list)
                                            <li><a href="#" id="{{  $lang_list->code }}" onclick="changeLanguage(this.id)">{{ $lang_list->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <script>
                            function changeLanguage(clicked_id) {

                                var csrf = $('meta[name="csrf-token"]').attr('content');
                                var id = clicked_id;
                                $.ajax({
                                    url: '/change-language/'+ id +'',

                                    success: function( data ) {
                                        console.log(data);
                                        location.reload();

                                    }
                                })

                            }

                        </script>
                    </div>
                </div>
            </div>
            <!--- END CONTAINER -->
        </div>
        <!-- END NAVIGATION AREA -->

        <!-- MOBILE-MENU-AREA START -->
        <div class="mobile-menu-area d-lg-none d-md-block d-sm-block d-block">
            <div class="col-md-9">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="navbar-nav">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            @foreach($menus as $menu)
                                <li>

                                    <a href="{{ $menu->seo_url }} "class="nav-link">{{ unserialize($menu->name)[$lang] }}</a>
                                    @if($menu->children ->isNotEmpty())
                                        @include ('/admin/category/menus_sub_list' , [ 'children' => $menu->children , 'type'=> 'menus'])
                                    @endif
                                </li>
                            @endforeach
                            <li><a href="{{ url('/product') }}">Ürünler</a></li>
                            <li><a href="{{ url('/blog') }}">Blog</a></li>
                            <li><a href="#">Select Language</a>
                                <ul>
                                    @foreach($languages as $language)
                                    <li><a href="#">{{ $language->name }}</a></li>
                                        @endforeach

                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- MOBILE-MENU-AREA END -->
    </div>
</header>
<!-- END HEADER SECTION -->
    <!-- Main content-->
<main>
    @yield('content')
</main>


    <!-- End main content-->


<!-- START FOOTER -->
<footer>
    <!--Footer top -->
    <div class="footer-top overlay-2 section-back-image-2" data-background="assets/img/bg/counter-bg.jpg">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-5 mb-5 footer-widget">
                    <div class="footer-section-title col-12 p-0 mb-4">
                        <h5>{{__('words.aboutus')}}</h5>
                    </div>
                    <!-- end widget title -->
                    <div class="about">
                        {{ unserialize($generalsettings->footer )[$lang]}}</div>
                    <div class="footer-logo">
                        <a href="#">
                            <img class="img-fluid" src="assets/img/app-google.png" alt="">
                        </a>
                        <a href="#">
                            <img class="img-fluid" src="assets/img/app-apple.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- End Widget -->
                <div class="col-lg-3 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-5 mb-5 footer-widget">
                    <div class="footer-section-title col-12 p-0 mb-4">
                        <h5>{{__('words.pages')}}</h5>
                    </div>
                    <!-- end widget title -->
                    <ul class="quick-link-list">
                        <li><a href="#">Education</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Healthcare Services</a></li>
                        <li><a href="#">Cleveland Foundation</a></li>
                    </ul>
                    <div class="footer-section-title col-12 p-0 mt-4 mb-4">
                        <h5>{{__('words.sosialmedia')}}</h5>
                    </div>
                    <!-- end widget title -->
                    <div class="footer-social">
                        <ul>

                            @foreach($sosials as $sosial)
                                <li><a href="{{ $sosial->url }}"><i class="icofont icofont-social-{{ $sosial->code }}" style="font-size: 27px"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- End Widget -->
                <div class="col-lg-3 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-0 mb-sm-5 mb-5 footer-widget">
                    <div class="footer-section-title col-12 p-0 mb-4">
                        <h5>{{__('words.whatsnew')}}</h5>
                    </div>
                    <!-- end widget title -->
                    <div class="single-wn-slider owl-carousel owl-theme">
                        @foreach($blogs as $blog)
                        <div class="single-wn-item">
                            <p>{{ unserialize($blog->caption)[$lang] }}</p>
                            <p>{{ str_limit(unserialize($blog->caption_two)[$lang] , 100) }}</p>
                        </div>
                        @endforeach
                    </div>
                    <a class="wn-readm" href="{{ url('/blog') }}">{{__('words.more')}}</a>
                </div>
                <!-- End Widget -->
                <div class="col-lg-3 col-md-6 col-sm-12 col-12 footer-widget">
                    <div class="footer-section-title col-12 p-0 mb-4">
                        <h5>{{__('words.staywithus')}}</h5>
                    </div>
                    <!-- end widget title -->
                    <ul class="quick-link-list">
                        <li><a href="#"><i class="lnr lnr-map-marker"></i> {{ $contacts->address }}</a></li>
                        <li><a href="#"><i class="lnr lnr-envelope "></i> {{ $contacts->mail }}</a></li>
                        <li><a href="#"><i class="lnr lnr-phone "></i> {{ $contacts->phone }}</a></li>

                    </ul>
                    <div class="footer-section-title col-12 p-0 mt-4 mb-4">
                        <h5>{{__('words.getupdated')}}</h5>
                    </div>
                    <!-- end widget title -->
                    <div class="foo-news">
                        <form action="#" method="post">
                            <div class="row m-0">
                                <div class="form-group col-lg-10 col-md-10 col-sm-10 col-10 p-0">
                                    <input name="fnews"  type="email" class="form-control" placeholder="Your email here...">
                                </div>
                                <div class="form-group col-lg-2 col-md-2 col-sm-2 col-2 p-0">
                                    <button type="submit" class="btn fnews-btn"><i class="icofont icofont-location-arrow"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Widget -->
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 copyright-text">
                    <p>Copyright © 2018 <a href="#"> {{ $generalsettings->company1}}</a> | All Rights Reserved</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 footer-menu">
                    <ul>
                        <li><a href="#">Make an Enquiry</a> </li>
                        <li><a href="#">Book an Appointment</a> </li>
                        <li><a href="#">Terms and Conditions</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->
<script src="{{ asset('assets/js/jquery-2.2.4.min.js')}}"></script>

<!-- popper js -->
<script src="{{ asset('assets/bootstrap/js/popper.min.js')}}"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- meanmenu min js  -->
<script src="{{ asset('assets/js/jquery.meanmenu.min.js')}}"></script>
<!-- Sticky JS -->
<script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>
<!-- gijgo js  -->
<script src="{{ asset('assets/js/gijgo.js')}}"></script>
<!-- owl-carousel min js  -->
<script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js')}}"></script>
<!-- jquery appear js  -->
<script src="{{ asset('assets/js/jquery.appear.js')}}"></script>
<!-- countTo js -->
<script src="{{ asset('assets/js/jquery.inview.min.js')}}"></script>
<!-- jquery mixitup js -->
<script src="{{ asset('assets/js/jquery.mixitup.min.js')}}"></script>
<!-- venobox js -->
<script src="{{ asset('assets/venobox/js/venobox.min.js')}}"></script>
<!-- scrolltopcontrol js -->
<script src="{{ asset('assets/js/scrolltopcontrol.js')}}"></script>
<!-- WOW - Reveal Animations When You Scroll -->
<script src="{{ asset('assets/js/wow.min.js')}}"></script>
<!-- scripts js -->
<script src="{{ asset('assets/js/scripts.js')}}"></script>


</body>
</html>
