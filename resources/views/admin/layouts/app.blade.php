<html>
<head>
    <title>Web Sitesi Yönetim Paneli</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Fonts--->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- Vendor styles -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/fontawesome/css/font-awesome.css' )}}"/>
    <link rel="stylesheet" href="{{ asset('admin/vendor/animate.css/animate.css')}}"/>
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{ asset('admin/vendor/blueimp-gallery/css/blueimp-gallery.min.css')}}"/>
    <script src="{{ asset('admin/vendor/blueimp-gallery/js/jquery.blueimp-gallery.min.js')}}"></script>


    <link rel="stylesheet" href="{{ asset('admin/vendor/switchery/switchery.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('admin/vendor/datatables/datatables.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('admin/vendor/sweetalert/lib/sweet-alert.css')}}"/>
    <script src="{{ asset('admin/vendor/sweetalert/lib/sweet-alert.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('admin/vendor/summernote/dist/summernote.css')}}">

    <!-- App styles -->
    <link rel="stylesheet" href="{{ asset('admin/styles/pe-icons/pe-icon-7-stroke.css')}}"/>
    <link rel="stylesheet" href="{{ asset('admin/styles/pe-icons/helper.css')}}"/>
    <link rel="stylesheet" href="{{ asset('admin/styles/stroke-icons/style.css')}}"/>
    <link rel="stylesheet" href="{{ asset('admin/styles/style.css')}}">

    <script src="{{ asset('admin/scripts/elfjquery.js')}}"></script>
</head>
<body>

<!-- Wrapper-->
<div class="wrapper">
    <!-- Header-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <div id="mobile-menu">
                    <div class="left-nav-toggle">
                        <a href="#">
                            <i class="stroke-hamburgermenu"></i>
                        </a>
                    </div>
                </div>
                <a class="navbar-brand" href="index.html">
                    TECHFONI
                    <span>v.1.0</span>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="left-nav-toggle">
                    <a href="#">
                        <i class="stroke-hamburgermenu"></i>
                    </a>
                </div>

                <ul class="nav navbar-nav navbar-right" style="margin-right: 25px !important;">
                    <li class="dropdown">
                        <a href="versions.html" ><i class="pe-7s-add-user"></i>
                            <span class="label label-warning pull-right">2</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="versions.html" ><i class="pe-7s-mail"></i>
                            <span class="label label-warning pull-right">12</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- End header-->

    <!-- Navigation-->
    <aside class="navigation">
        <center>
            <a>
                
            </a>
        </center>
        <div class="stats-label text-color" style="text-align: center;">
            <span class="font-extra-bold font-uppercase">Ramazan Demir</span>
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                    <small class="text-muted">Hesabım <b class="caret"></b></small>
                </a>
                <ul class="dropdown-menu animated flipInX m-t-xs" style="margin-left: 20px;">
                    @if (Auth::guard('admin')->check() || Auth::guard()->check())
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @if (Auth::guard('admin')->check())
                                    Admin
                                @else
                                    {{ Auth::user()->name }}
                                @endif
                                <span class="caret"></span>
                            </a>
                        </li>
                            <li>
                                @if (Auth::guard('admin')->check())
                                    <a class="dropdown-item" href="/admin/dashboard">Dashboard</a>
                                @else
                                    <a class="dropdown-item" href="/dashboard">Dashboard</a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </li>


                    @endif
                </ul>
            </div>
        </div>
        <nav>

            <ul class="nav luna-nav">
                <li class="active">
                    <a href="{{url('admin/dashboard')}}"><i class="pe-7s-display1"></i> Yönetim Paneli</a>
                </li>
                <li>
                    <a href="#ayarlar" data-toggle="collapse" aria-expanded="false">
                        <i class="pe-7s-ticket"></i>
                        Genel Ayarlar<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="ayarlar" class="nav nav-second collapse">
                        <li class="">
                            <a href="{{url('admin/web-setting')}}">
                                Web Sitesi Ayarları
                            </a>
                        </li>
                        <li class="">
                            <a href="{{url('admin/contact-setting')}}">
                                İletişim Ayarları
                            </a>
                        </li>
                        <li class="">
                            <a href="{{url('admin/language-setting')}}">
                                Dil Ayarları
                            </a>
                        </li>
                        <li class="">
                            <a href="{{url('admin/sosial-setting')}}">
                                Sosyal Medya Ayarları
                            </a>
                        </li>
                        <li class="">
                            <a href="{{url('admin/user-setting')}}">
                                Kullanıcı Ayarları
                            </a>
                        </li>
                        <li class="">
                            <a href="{{url('admin/mail-setting')}}">
                                Mail Ayarları
                            </a>
                        </li>
                        <li class="">
                            <a href="{{url('admin/web-setting/robottxt')}}">
                                Robot TXT
                            </a>
                        </li>


                    </ul>
                </li>
                <li>
                    <a href="#icerik" data-toggle="collapse" aria-expanded="false">
                        <i class="pe-7s-ticket"></i>
                        İçerik Yönetimi<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="icerik" class="nav nav-second collapse">
                        <li class="">
                            <a href="{{url('admin/slider')}}">
                                Slider                          </a>
                        </li>
                        <li class="">
                            <a href="{{url('admin/category/menus')}}">
                                Menuler                          </a>
                        </li>
                        <li class="">
                            <a href="{{url('admin/pages')}}">
                                Sayfalar                          </a>
                        </li>


                    </ul>
                </li>
                <li>
                    <a href="#blog" data-toggle="collapse" aria-expanded="false">
                        <i class="pe-7s-ticket"></i>
                        Blog Yönetimi<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="blog" class="nav nav-second collapse">

                        <li class="">
                            <a href="{{url('admin/blog')}}">
                                Blog Yazıları                          </a>
                        </li>
                        <li class="">
                            <a href="{{url('admin/category/blog')}}">Blog Kategorileri</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#urunler" data-toggle="collapse" aria-expanded="false">
                        <i class="pe-7s-ticket"></i>
                        Ürün Yönetimi<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="urunler" class="nav nav-second collapse">
                        <li class="">
                            <a href="{{url('admin/products')}}">Ürünler</a>
                        </li>
                        <li class="">
                            <a href="{{url('admin/category/product')}}">Ürün Kategorileri</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#galeries" data-toggle="collapse" aria-expanded="false">
                        <i class="pe-7s-ticket"></i>
                        Galeri Yönetimi<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="galeries" class="nav nav-second collapse">
                        <li class="">
                            <a href="{{url('admin/categories/images')}}">Resim Kategorileri</a>
                        </li>
                        <li class="">
                            <a href="{{url('admin/galeries/images')}}">Resimler</a>
                        </li>
                        <li class="">
                            <a href="{{url('admin/catagory/video')}}">Video Kategorileri</a>
                        </li>
                        <li class="">
                            <a href="{{url('admin/galeries/video')}}">Videolar</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#messages" data-toggle="collapse" aria-expanded="false">
                        <i class="pe-7s-ticket"></i>
                        Mesaj Yönetimi<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="messages" class="nav nav-second collapse">
                        <li class="">
                            <a href="{{url('admin/messages/contact-form')}}">İletişim Formu</a>
                        </li>
                        <li class="">
                            <a href="{{url('admin/messages/get-price')}}">Fiyat Teklifi Formu</a>
                        </li>
                        <li class="">
                            <a href="{{url('admin/messages/download-catalouge')}}">Katalog İstek Formu</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#dosyayonetimi" data-toggle="collapse" aria-expanded="false">
                        <i class="pe-7s-ticket"></i>
                        PopUp Yönetimi<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="popupyonetimi" class="nav nav-second collapse">
                        <li class="">
                            <a href="{{url('admin/web-setting/popup')}}">
                                PopUp Düzenle</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#dosyayonetimi" data-toggle="collapse" aria-expanded="false">
                        <i class="pe-7s-ticket"></i>
                        Dosya Yönetimi<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="dosyayonetimi" class="nav nav-second collapse">
                        <li class="">
                            <a href="{{url('admin/file-directory')}}">
                                Sunucuya Gözat                          </a>
                        </li>
                    </ul>
                </li>
                <li class="line">
                    <span></span>
                </li>
            </ul>
        </nav>
    </aside>

    <!-- End navigation-->

    <!-- Main content-->
    <section class="content">
            @yield('content')

    </section>
    <!-- End main content-->
</div>
<script src="{{ asset('admin/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('admin/vendor/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Vendor scripts -->
<script src="{{ asset('admin/scripts/ckeditor/ckeditor.js')}}"></script>
<script src="{{ asset('admin/vendor/pacejs/pace.min.js')}}"></script>

<script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('admin/vendor/switchery/switchery.min.js')}}"></script>
<script src="{{ asset('admin/vendor/sparkline/index.js')}}"></script>
<script src="{{ asset('admin/vendor/flot/jquery.flot.min.js')}}"></script>
<script src="{{ asset('admin/vendor/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{ asset('admin/vendor/flot/jquery.flot.spline.js')}}"></script>
<script src="{{ asset('admin/vendor/datatables/datatables.min.js')}}"></script>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}" charset="utf-8"></script>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js')}}"></script>
@stack('script')
<script>
    $('.textarea').ckeditor();
    // $('.textarea').ckeditor(); // if class is prefered.
</script>


<script>

    $(document).ready(function () {


        $('#tableExample3').DataTable({
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
            buttons: [
                {extend: 'copy',className: 'btn-sm'},
                {extend: 'excel',className: 'btn-sm'},
                {extend: 'pdf', title: 'Tablo', className: 'btn-sm'},
                {extend: 'print',className: 'btn-sm'}
            ]
        });

    });

</script>

<script>


    $('.demo4').click(function () {
        var url    = $(this).attr('url');
        swal({
                title: "Emin misiniz?",
                text: "Bu İşlem Geri Alınamaz .!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Evet,  İçeriği Sil!",
                cancelButtonText: "Hayır, İptal Et!",
                closeOnConfirm: false,
                closeOnCancel: false },
            function (isConfirm) {
                if (isConfirm) {
                    var path = url ;
                    window.location = path;
                } else {
                    swal("İptal edildi", "İşleminiz İsteğiniz Üzere İptal Edildi ", "error");
                }
            });
    });
</script>






</body>
</html>
