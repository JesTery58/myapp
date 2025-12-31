<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ isset(unserialize($title)[$lang]) ? unserialize($title)[$lang] : "" }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ isset(unserialize($description)[$lang]) ? unserialize($description)[$lang] : ""  }}">
    <meta name="author" content="{{ $generalsettings->company1 }}">
    <meta name="keywords" content="{{ isset(unserialize($keywords)[$lang]) ? unserialize($keywords)[$lang] :"" }}">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <!--Fonts--->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- Vendor styles -->
    <script src="{{ asset('assets/scripts/jquery.min.js' )}}"></script>
   <!-- FONT ICONS -->
   <link href="css/flaticon.css" rel="stylesheet">
   <!-- PLUGINS STYLESHEET -->
   <link href="{{ asset('css/menu.css' )}}" rel="stylesheet">
   <link id="effect" href="{{ asset('css/dropdown-effects/fade-down.css' )}}" media="all" rel="stylesheet">
   <link href="{{ asset('css/magnific-popup.css' )}}" rel="stylesheet">
   <link href="{{ asset('css/owl.carousel.min.css' )}}" rel="stylesheet">
   <link href="{{ asset('css/owl.theme.default.min.css' )}}" rel="stylesheet">
   <link href="{{ asset('css/lunar.css' )}}" rel="stylesheet">
   <!-- ON SCROLL ANIMATION -->
   <link href="{{ asset('css/animate.css' )}}" rel="stylesheet">
   <!-- TEMPLATE CSS -->
   <link href="{{ asset('css/style.css' )}}" rel="stylesheet">
   <!-- TEMPLATE CSS -->
   <link href="{{ asset('css/colors/skyblue-theme.css' )}}" rel="stylesheet">
   <!-- Style Switcher CSS -->
   <link href="{{ asset('css/colors/blue-theme.css' )}}" rel="alternate stylesheet" title="blue-theme">
   <link href="{{ asset('css/colors/crocus-theme.css' )}}" rel="alternate stylesheet" title="crocus-theme">
   <link href="{{ asset('css/colors/green-theme.css' )}}" rel="alternate stylesheet" title="green-theme">
   <link href="{{ asset('css/colors/magenta-theme.css' )}}" rel="alternate stylesheet" title="magenta-theme">
   <link href="{{ asset('css/colors/purple-theme.css' )}}" rel="alternate stylesheet" title="purple-theme">
   <link href="{{ asset('css/colors/skyblue-theme.css' )}}" rel="alternate stylesheet" title="skyblue-theme">
   <link href="{{ asset('css/colors/red-theme.css' )}}" rel="alternate stylesheet" title="red-theme">
   <link href="{{ asset('css/colors/violet-theme.css' )}}" rel="alternate stylesheet" title="violet-theme">
    <?php echo $generalsettings->headerscript ;?>
    @yield('stylesheets')
    
</head>
<body>
   <!-- PRELOADER SPINNER
                  =============================================
   <div id="loading" class="loading--theme  h-full w-full fixed z-[99999999] mt--0 top-0 bg-[#f5f5f9]">
      <div id="loading-center"
         class="absolute !h-[100px] !w-[100px] mt-[-50px] ml-[-50px] animate-[loading-center-absolute_1s_infinite] left-2/4 top-2/4 lg:max-xl:!h-[90px] lg:max-xl:!w-[90px] lg:max-xl:!mt-[-45px] lg:max-xl:ml-[-45px] md:max-lg:!h-[90px] md:max-lg:!w-[90px] md:max-lg:!mt-[-45px] md:max-lg:ml-[-45px]">
         <span
            class="loader !w-[100px] !h-[100px] inline-block relative box-border animate-[rotation_1s_linear_infinite] rounded-[50%] border-2 border-solid border-[transparent_#888] after:content-[''] after:box-border after:absolute after:-translate-x-2/4 after:-translate-y-2/4 after:rounded-[50%] after:border-[50px] after:border-solid after:border-[transparent_rgba(30,30,30,0.15)] after:left-2/4 after:!top-2/4 lg:max-xl:!w-[90px] lg:max-xl:!h-[90px] lg:max-xl:after:border-[45px] lg:max-xl:after:border-solid md:max-lg:!w-[90px] md:max-lg:!h-[90px] md:max-lg:after:border-[45px] md:max-lg:after:border-solid sm:max-md:!w-[80px] sm:max-md:!h-[80px] sm:max-md:after:border-[40px] sm:max-md:after:border-solid"></span>
      </div>
   </div>
    -->
   <!-- STYLE SWITCHER
                  ============================================= -->
   <div id="stlChanger"
      class="fixed z-[9999] !text-[15px] overflow-hidden right-[-230px] cursor-pointer transition-all duration-[400ms] ease-[ease-in-out] rounded-none top-[100px] xsm:max-sm:hidden">
      <div class="blockChanger bgChanger min-w-[280px] min-h-[280px] !w-[230px]">
         <a href="#"
            class="chBut icon-xs !w-[50px] !h-[50px] !absolute z-[1000000] !text-center transition-all duration-300 ease-[ease-in-out] shadow-[0_0_2px_rgba(50,50,50,0.4)] pl-[2px] pr-0 py-0 rounded-[4px_0px_0px_4px] ![border-left:none] [border:1px_solid_#ef2853] left-0 top-[30px] bg-[#ef2853]"><span
               class="flaticon-control-panel before:content-['\f1cf'] before:!text-white before:!text-[2.15rem]"></span></a>
       
            <div
            class="chBody white-color !w-[230px] relative border !h-[425px] overflow-scroll overflow-x-hidden ml-[50px] rounded-[4px_0px_0px_4px] border-solid border-[#2b2e37] bg-[#2b2e37] [direction:rtl]">
            
            <div class="stBlock !text-center" style="margin: 30px 20px 20px 26px;">
               <div class="stBgs">
                  <p
                     class="switch !text-[18px] font-semibold tracking-[0] !mb-[20px] font-Jakarta w-full !text-white rounded px-[1.4rem] py-[0.4rem] border-2 border-solid border-white !leading-[1.6666]">
                  </p>
                  <!--
                  <p class="color--white !text-[1.125rem] font-semibold tracking-[0] !mb-[20px] font-Jakarta">Color
                     Scheme</p>
                  <a class=" no-underline !w-[50px] !h-[50px] float-left cursor-pointer opacity-100 !mt-0 !mb-[8px] mx-[5px] !p-0 rounded-[8px]"
                     href="javascript:chooseStyle('pink-theme', 60)"><img src="images/color-scheme/pink.jpg"
                        class=" !w-[50px] !h-[50px] rounded-[8px]" alt=""></a>
                  <a class=" no-underline !w-[50px] !h-[50px] float-left cursor-pointer opacity-100 !mt-0 !mb-[8px] mx-[5px] !p-0 rounded-[8px]"
                     href="javascript:chooseStyle('purple-theme', 60)"><img src="images/color-scheme/purple.jpg"
                        class=" !w-[50px] !h-[50px] rounded-[8px]" alt=""></a>
                  <a class=" no-underline !w-[50px] !h-[50px] float-left cursor-pointer opacity-100 !mt-0 !mb-[8px] mx-[5px] !p-0 rounded-[8px]"
                     href="javascript:chooseStyle('violet-theme', 60)"><img src="images/color-scheme/violet.jpg"
                        class=" !w-[50px] !h-[50px] rounded-[8px]" alt=""></a>
                  <a class=" no-underline !w-[50px] !h-[50px] float-left cursor-pointer opacity-100 !mt-0 !mb-[8px] mx-[5px] !p-0 rounded-[8px]"
                     href="javascript:chooseStyle('skyblue-theme', 60)"><img src="images/color-scheme/skyblue.jpg"
                        class=" !w-[50px] !h-[50px] rounded-[8px]" alt=""></a>
                  <a class=" no-underline !w-[50px] !h-[50px] float-left cursor-pointer opacity-100 !mt-0 !mb-[8px] mx-[5px] !p-0 rounded-[8px]"
                     href="javascript:chooseStyle('magenta-theme', 60)"><img src="images/color-scheme/magenta.jpg"
                        class=" !w-[50px] !h-[50px] rounded-[8px]" alt=""></a>
                  <a class=" no-underline !w-[50px] !h-[50px] float-left cursor-pointer opacity-100 !mt-0 !mb-[8px] mx-[5px] !p-0 rounded-[8px]"
                     href="javascript:chooseStyle('crocus-theme', 60)"><img src="images/color-scheme/crocus.jpg"
                        class=" !w-[50px] !h-[50px] rounded-[8px]" alt=""></a>
                  <a class=" no-underline !w-[50px] !h-[50px] float-left cursor-pointer opacity-100 !mt-0 !mb-[8px] mx-[5px] !p-0 rounded-[8px]"
                     href="javascript:chooseStyle('red-theme', 60)"><img src="images/color-scheme/red.jpg"
                        class=" !w-[50px] !h-[50px] rounded-[8px]" alt=""></a>
                  <a class=" no-underline !w-[50px] !h-[50px] float-left cursor-pointer opacity-100 !mt-0 !mb-[8px] mx-[5px] !p-0 rounded-[8px]"
                     href="javascript:chooseStyle('green-theme', 60)"><img src="images/color-scheme/green.jpg"
                        class=" !w-[50px] !h-[50px] rounded-[8px]" alt=""></a>
                        --->
               </div>
            </div>
            <!---
            <div class="stBlock !text-center" style="margin: 0px 27px 25px 31px;">
               <a class="btn rounded-[4px] btn--theme hover--theme w-full leading-none mt-[15px] !px-[1.2rem] !py-[0.65rem]"
                  href="javascript:chooseStyle('none', 60)">Reset
                  Color</a>
            </div>
            --->
         </div>
         
      </div>
   </div>
   <!-- END SWITCHER -->
   <!-- PAGE CONTENT
                  ============================================= -->
   

    <!-- Main content-->
<div id="page" class="page font--jakarta">
     <header id="header" class="tra-menu navbar-dark inner-page-header white-scroll w-full block !pt-0">
         <div class="header-wrapper fixed z-[1030] top-0 inset-x-0">
            <!-- MOBILE HEADER -->
            <div class="wsmobileheader clearfix">
               <span
                  class="smllogo md:max-lg:!block md:max-lg:!mt-[22px] md:max-lg:!pl-[22px] sm:max-md:!block sm:max-md:!mt-[23px] sm:max-md:!pl-[18px] xsm:max-sm:!block xsm:max-sm:!mt-[23px] xsm:max-sm:!pl-[16px]"><img
                     class="md:w-auto  md:max-lg:!max-w-[inherit] md:max-lg:!max-h-[34px] sm:max-md:!w-auto sm:max-md:!max-w-[inherit] sm:max-md:!max-h-[34px] xsm:max-sm:!w-auto xsm:max-sm:!max-w-[inherit] xsm:max-sm:!max-h-[34px]"
                     src="images/logo-pink.png" alt="mobile-logo"></span>
               <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
            </div>
            <!-- NAVIGATION MENU -->
            <div
               class="wsmainfull menu clearfix !text-[#b1b7cd] p-[20px_0] w-full h-auto z-[1031] [transition:all_450ms_ease-in-out]">
               <div class="wsmainwp clearfix">
                  <!-- HEADER BLACK LOGO -->
                  <div class="desktoplogo">
                     <a href="{{ url('/') }}" class="logo-black">
                        <img
                           class="light-theme-img w-auto max-w-[inherit] !max-h-[38px] lg:max-xl:!max-h-[34px] inline-block"
                           src="images/logo-pink.png" alt="logo">
                        <img class="dark-theme-img w-auto max-w-[inherit] !max-h-[38px] lg:max-xl:!max-h-[34px]"
                           src="images/logo-blue-white.png" alt="logo">
                     </a>
                  </div>
                  <!-- HEADER WHITE LOGO -->
                  <div class="desktoplogo">
                     <a href="{{ url('/') }}" class="logo-white">
                        <img class=" w-auto max-w-[inherit] !max-h-[38px] lg:max-xl:!max-h-[34px] inline-block"
                           src="images/logo-white.png" alt="logo"></a>
                  </div>
                  <!-- MAIN MENU -->
                  <nav class="wsmenu clearfix">
                     <div class="overlapblackbg"></div>
                     <ul class="wsmenu-list nav-theme">
                     
                     <!-- SIMPLE NAVIGATION LINK -->
                       <li class="nl-simple" aria-haspopup="true"><a href="#features-2" class="h-link">{{__('words.aboutus')}}</a>
                        </li>
                        <li class="nl-simple" aria-haspopup="true"><a href="#pricing-1" class="h-link">{{__('words.pricing')}}</a>
                        </li>
                        <!-- SIMPLE NAVIGATION LINK -->
                        <li class="nl-simple" aria-haspopup="true"><a href="#lnk-2" class="h-link">{{__('words.integrations')}}</a>
                        </li>

                        <!-- SIMPLE NAVIGATION LINK -->
                        <li class="nl-simple" aria-haspopup="true"><a href="#footer-3" class="h-link">{{__('words.contact')}}</a>
                        </li>
                     
                        <!-- END MEGAMENU -->
                        
                        <li class="nl-simple" aria-haspopup="true">
            
                           <a href="#banner-3" class="btn r-05 btn--theme hover--tra-black last-link">{{__('words.freeTrial')}}</a>
                        </li>
                        <!-- SIGN UP BUTTON -->
                        <li class="nl-simple" aria-haspopup="true">
                           <a href="https://app.qapera.com" target="_blank" class="btn r-04 btn--theme hover--tra-black last-link">{{__('words.signUp')}}</a>
                        </li>
                         <li aria-haspopup="true"><span class="wsmenu-click"><i class="wsmenu-arrow"></i></span>
                           <a href="#" class="h-link" style="text-transform: uppercase;">{{$lang}} <span class="wsarrow"></span></a>
                           <ul class="sub-menu">
                             
                               @foreach($lang_lists as $lang_list)
                                <li aria-haspopup="true"><a href="javascript:void(0)" style="text-transform: uppercase;" id="{{$lang_list->code }}" onclick="changeLanguage(this.id)"
                                               style="margin-top: 0px !important;border:none; border-bottom: 1px solid #c5c5c5;border-radius: 1px"> 
                        
                                                {{ $lang_list->code }}
                                            </a></li>
                                        
                                    @endforeach
                           </ul>
                        </li>
                     </ul>
                  </nav>
                  <!-- END MAIN MENU -->
               </div>
            </div>
            <!-- END NAVIGATION MENU -->
         </div>
         <!-- End header-wrapper -->
      </header>
@yield('content')
</div>


      <footer id="footer-3"
         class=" pt--100 pt-[100px] lg:max-xl:pt-[80px] md:max-lg:pt-[70px] footer !pb-[50px] lg:max-xl:!pb-[35px] md:max-lg:!pb-[25px] sm:max-md:!pb-[30px] xsm:max-sm:!pb-[30px]">
         <div class="container">
            <!-- FOOTER CONTENT -->
            <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)] ">
               <!-- FOOTER LOGO -->
               <div class="xl:w-3/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full ">
                  <div class="footer-info !mb-[40px] lg:max-xl:!mb-[50px]">
                     <img
                        class="footer-logo w-auto max-w-[inherit] xl:!max-h-[40px] lg:max-xl:!max-h-[34px] md:max-lg:!max-h-[33px] sm:max-md:!max-h-[38px] xsm:max-sm:!max-h-[37px]"
                        src="images/logo-pink.png" alt="footer-logo">
                     <img
                        class="footer-logo-dark hidden w-auto max-w-[inherit] xl:!max-h-[40px] lg:max-xl:!max-h-[34px] md:max-lg:!max-h-[33px] sm:max-md:!max-h-[38px] xsm:max-sm:!max-h-[37px]"
                        src="images/logo-pink-white.png" alt="footer-logo">
                  </div>
               </div>
            <div>
               Fevzi Çakmak Cad. No:24 Kat:3 Daire:8<br>
               34782 Kadıköy / İstanbul<br>
               info@qapera.com
            </div>
             <div style="margin-left: 50px;">
              
               +90 532 785 50 94<br>
               info@qapera.com
            </div>
               
            </div>
            <!-- END FOOTER CONTENT -->
            <hr
               class=" mt-[30px] !mb-[50px] lg:max-xl:!mt-[10px] lg:max-xl:lg:!mb-[35px] md:max-lg:!mt-[5px] md:max-lg:!mb-[25px] sm:max-md:!mt-[15px] sm:max-md:!mb-[30px] xsm:max-sm:!mt-[5px] xsm:max-sm:!mb-[30px]">
            <!-- FOOTER DIVIDER LINE -->
            <!-- BOTTOM FOOTER -->
            <div class="bottom-footer">
               <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)]  row-cols-1 row-cols-md-2 items-center">
                  <!-- FOOTER COPYRIGHT -->
                  <div
                     class="xl:w-6/12 lg:max-xl:w-6/12 md:max-lg:w-6/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full">
                     <div class="footer-copyright">
                        <p class="p-sm !mb-0">&copy; 2026 Qapera. <span>All Rights Reserved</span></p>
                     </div>
                  </div>
                  <!-- FOOTER SECONDARY LINK -->
                  <div
                     class="xl:w-6/12 lg:max-xl:w-6/12 md:max-lg:w-6/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full">
                     <div class="bottom-secondary-link ico-15 text-right text-end">
                       
                     </div>
                  </div>
               </div>
               <!-- End row -->
            </div>
            <!-- END BOTTOM FOOTER -->
         </div>
         <!-- End container -->
      </footer>
      <!-- END FOOTER-3 -->
   </div>
   <!-- END PAGE CONTENT -->
   <!-- EXTERNAL SCRIPTS
				   ============================================= -->
   <script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>
   <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('js/modernizr.custom.js') }}"></script>
   <script src="{{ asset('js/jquery.easing.js') }}"></script>
   <script src="{{ asset('js/jquery.appear.js') }}"></script>
   <script src="{{ asset('js/menu.js') }}"></script>
   <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
   <script src="{{ asset('js/pricing-toggle.js') }}"></script>
   <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
   <script src="{{ asset('js/request-form.js') }}"></script>
   <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
   <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
   <script src="{{ asset('js/popper.min.js') }}"></script>
   <script src="{{ asset('js/lunar.js') }}"></script>
   <script src="{{ asset('js/wow.js') }}"></script>
   <!-- Custom Script -->
   <script src="{{ asset('js/custom.js') }}"></script>
   <script src="{{ asset('js/changer.js') }}"></script>
   <script defer src="{{ asset('js/styleswitch.js') }}"></script>
</body>


</html>
<script>
    $( document ).ready(function() {
        console.log( "ready!" );
        $("#eee3").trigger("click");
        //$("#lb2s").show();
        return false;
    });

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

    const mottos = document.querySelectorAll('.motto');
    let index = 0;

    // ilk başta hepsini gizle, ilkini göster
    mottos.forEach(el => el.style.display = 'none');
    mottos[0].style.display = 'block';

    setInterval(() => {
        mottos[index].style.display = 'none';
        index = (index + 1) % mottos.length;
        mottos[index].style.display = 'block';
    }, 2000); // 1000 ms = 1 saniye
</script>

@stack('scripts')
</body>
</html>
