@extends('layouts.app')

@section('content')

      <section id="hero-2"
         class="bg--scroll hero-section relative md:max-lg:!mt-[80px] z-[3] w-full bg-no-repeat 
         bg-[center_center] bg-cover bg-fixed sm:max-md:w-auto sm:max-md:bg-scroll 
         xsm:max-sm:w-auto xsm:max-sm:bg-scroll 
         pt-[150px] pb--100 pb-[100px] lg:max-xl:pt-[150px] lg:max-xl:!pb-[80px] md:max-lg:py-[70px]"
         style="background: url('{{ asset('images/hero-2.jpg') }}') center / cover no-repeat;"
         >
         <div class="container">
            <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)]  items-center">
               <!-- HERO IMAGE -->
               <div
                  class="md:w-6/12 lg:max-xl:w-6/12 xl:w-6/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full order-last order-md-2 md:max-lg:order-2 lg:max-xl:order-2 xl:order-2">
                  <div
                     class="hero-2-img wow fadeInRight !text-center pr-[25px] lg:max-xl:pr-[15px] md:max-lg:pr-[5px] xsm:max-sm:!mt-[40px]">
                     <img class="img-fluid" src="images/hero-2-img.png" alt="hero-image">
                  </div>
               </div>
               <!-- HERO TEXT -->
               <div
                  class="md:w-6/12 lg:max-xl:w-6/12 xl:w-6/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full order-first order-md-2 md:max-lg:order-2 lg:max-xl:order-2 xl:order-2">
                  <div class="hero-2-txt wow fadeInLeft">
                     <!-- Title -->
                     <h2
                        class=" motto s-56 w--700 color--black xl:!text-[3.5rem] md:max-lg:!text-[2.94117rem] lg:max-xl:!text-[3.25rem] sm:max-md:!text-[2.375rem] xsm:max-sm:!text-[2.0625rem] !font-bold leading-[1.25] font-Jakarta sm:max-md:!leading-[1.35] xsm:max-sm:!leading-[1.35] xl:!mb-[28px] lg:max-xl:!mb-[24px] md:max-lg:!mb-[18px] sm:max-md:!mb-[15px] xsm:max-sm:!mb-[18px]">
                        {{ __('words.motto-1') }}</h2>
                         <h2
                        class="motto s-56 w--700 color--black xl:!text-[3.5rem] md:max-lg:!text-[2.94117rem] lg:max-xl:!text-[3.25rem] sm:max-md:!text-[2.375rem] xsm:max-sm:!text-[2.0625rem] !font-bold leading-[1.25] font-Jakarta sm:max-md:!leading-[1.35] xsm:max-sm:!leading-[1.35] xl:!mb-[28px] lg:max-xl:!mb-[24px] md:max-lg:!mb-[18px] sm:max-md:!mb-[15px] xsm:max-sm:!mb-[18px]">
                        {{ __('words.motto-2') }}</h2>
                         <h2
                        class="motto s-56 w--700 color--black xl:!text-[3.5rem] md:max-lg:!text-[2.94117rem] lg:max-xl:!text-[3.25rem] sm:max-md:!text-[2.375rem] xsm:max-sm:!text-[2.0625rem] !font-bold leading-[1.25] font-Jakarta sm:max-md:!leading-[1.35] xsm:max-sm:!leading-[1.35] xl:!mb-[28px] lg:max-xl:!mb-[24px] md:max-lg:!mb-[18px] sm:max-md:!mb-[15px] xsm:max-sm:!mb-[18px]">
                        {{ __('words.motto-3') }}</h2>
                     <!-- Text -->
                     <p
                        class="p-lg xl:!mb-[32px] lg:max-xl:!mb-[28px] md:max-lg:!mb-[24px] sm:max-md:!mb-[25px] xsm:max-sm:!mb-[25px] pr-[3%] lg:max-xl:pr-0 md:max-lg:pr-0">
                        {{ __('words.motto-p') }}
                     </p>
                     <!-- HERO DIGITS -->
                     <div class="hero-digits md:max-lg:-mt-[8px] sm:max-md:px-[10%] sm:max-md:py-0 ">
                        <!-- DIGIT BLOCK #1 -->
                        <div id="hd-1-1"
                           class="wow fadeInUp xl:!w-[45%] inline-block float-left pr-[20px] md:max-lg:w-6/12 md:max-lg:pr-0">
                           <div
                              class="hero-digits-block md:max-lg:block flex relative items-stretch justify-start [flex-flow:row_wrap] ">
                              <!-- Digit -->
                              <div class="block-digit">
                                 <h2
                                    class="s-46 statistic-number color--black xl:!text-[2.875rem] lg:max-xl:!text-[2.625rem] md:max-lg:!text-[2.75rem] sm:max-md:!text-[2.75rem] xsm:max-sm:!text-[2.5rem] !leading-none !font-bold font-Jakarta tracking-[-1px] !mb-0 lg:max-xl:tracking-[-0.5px] md:max-lg:tracking-[-0.5px] sm:max-md:tracking-[-0.5px] xsm:max-sm:leading-none xsm:max-sm:tracking-[-0.5px]">
                                    2<span
                                       class="xl:!text-[1.85rem] md:max-lg:!text-[2.25rem] sm:max-md:!text-[2.25rem] xsm:max-sm:!text-[2.25rem]">x</span>
                                 </h2>
                              </div>
                              <!-- Text -->
                              <div class="block-txt overflow-hidden flex-1 max-w-full pl-[12px] md:max-lg:!pl-0">
                                 <p
                                    class="p-sm leading-[1.35] xl:!mt-[5px] !mb-0 lg:max-xl:!mt-[2px] md:max-lg:!mt-[10px] !p-0">
                                    Tempor sapien and quaerat placerat</p>
                              </div>
                           </div>
                        </div>
                        <!-- END DIGIT BLOCK #1 -->
                        <!-- DIGIT BLOCK #2 -->
                        <div id="hd-1-2"
                           class="wow fadeInUp xl:!w-[55%] inline-block float-left pr-[20px] md:max-lg:w-6/12 md:max-lg:pr-0">
                           <div
                              class="hero-digits-block md:max-lg:block sm:max-md:block xsm:max-sm:block flex relative items-stretch justify-start [flex-flow:row_wrap]">
                              <!-- Digit -->
                              <div class="block-digit">
                                 <h2
                                    class="s-46 statistic-number color--black xl:!text-[2.875rem] lg:max-xl:!text-[2.625rem] md:max-lg:!text-[2.75rem] sm:max-md:!text-[2.75rem] xsm:max-sm:!text-[2.5rem] !leading-none !font-bold font-Jakarta tracking-[-1px] !mb-0 lg:max-xl:tracking-[-0.5px] md:max-lg:tracking-[-0.5px] sm:max-md:tracking-[-0.5px] xsm:max-sm:leading-none xsm:max-sm:tracking-[-0.5px]">
                                    63<span
                                       class="xl:!text-[1.85rem] md:max-lg:!text-[2.25rem] sm:max-md:!text-[2.25rem] xsm:max-sm:!text-[2.25rem]">%</span>
                                 </h2>
                              </div>
                              <!-- Text -->
                              <div class="block-txt overflow-hidden flex-1 max-w-full pl-[12px] md:max-lg:!pl-0">
                                 <p
                                    class="p-sm leading-[1.35] xl:!mt-[5px] !mb-0 lg:max-xl:!mt-[2px] md:max-lg:!mt-[10px] !p-0">
                                    Ligula suscipit vitae and rutrum turpis</p>
                              </div>
                           </div>
                        </div>
                        <!-- END DIGIT BLOCK #2 -->
                     </div>
                     <!-- END HERO DIGITS -->
                  </div>
               </div>
               <!-- END HERO TEXT -->
            </div>
            <!-- End row -->
         </div>
         <!-- End container -->
      </section>
      <!-- END HERO-2 -->
      <!-- BRANDS-1
                     ============================================= -->
      <div id="brands-1" class="py--100 py-[100px] lg:max-xl:py-[80px] md:max-lg:py-[70px] brands-section">
         <div class="container">
            <!-- BRANDS CAROUSEL -->
            <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)]">
               <div class="col !text-center w-full flex-[1_0_0%] px-[calc(0.5*_1.5rem)] max-w-full">
                  <div class="owl-carousel brands-carousel-6">
                     <!-- BRAND LOGO IMAGE -->
                      <?php
                     $files = glob(public_path('images/brands/*.{jpg,jpeg,png,gif,webp,svg}'), GLOB_BRACE);
                     shuffle($files);
                     ?>

                     @foreach($files as $file)
                     <div
                        class="brand-logo px-[30px] py-0 lg:max-xl:px-[12px] lg:max-xl:py-0 md:max-lg:px-[12px] md:max-lg:py-0 sm:max-md:px-[20px] sm:max-md:py-0 xsm:max-sm:px-[25px] xsm:max-sm:py-0 overflow-hidden relative transition-all duration-[400ms] ease-[ease-in-out] top-0 hover:-top-1.5">
                      
                           <img class="img-fluid light-theme-img" src="images/brands/{{ basename($file) }}" alt="brand-logo">
                        
                     </div>
                     @endforeach
                   
                  </div>
               </div>
            </div>
            <!-- END BRANDS CAROUSEL -->
         </div>
         <!-- End container -->
      </div>
      <!-- END BRANDS-1 -->
      <!-- DIVIDER LINE -->
      <hr
         class="divider w-full h-px bg-transparent bg-[linear-gradient(90deg,rgba(206,211,246,0)_0,#bbb_38%,#bbb_64%,rgba(206,211,246,0)_99%)] opacity-40 !m-0 ![border:none]">
      <!-- FEATURES-2
                     ============================================= -->
      <section id="features-2"
         class=" py--100 py-[100px] lg:max-xl:py-[80px] md:max-lg:py-[70px]  features-section division">
         <div class="container">
            <!-- SECTION TITLE -->
            <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)]  justify-center">
               <div
                  class="md:w-10/12 lg:max-xl:w-9/12 xl:w-9/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full">
                  <div
                     class="section-title mb--70 xl:!mb-[70px] lg:max-xl:!mb-[60px] md:max-lg:!mb-[50px] !text-center">
                     <!-- Title -->
                     <h2
                        class="s-50 w--700 xl:!text-[3.125rem] lg:max-xl:!text-[2.875rem] md:max-lg:!text-[2.64705rem] sm:max-md:!text-[2.375rem] xsm:max-sm:!text-[2.0625rem] !font-bold lg:max-xl:!mb-[20px] md:max-lg:!mb-[15px] sm:max-md:!mb-[20px] xsm:max-sm:!mb-[15px] xl:!mb-[26px] xl:!leading-[1.25] font-Jakarta sm:max-md:!leading-[1.35] xsm:max-sm:!leading-[1.35] !tracking-[-0.5px]">
                        {{ __('words.nextgen') }}</h2>
                     <!-- Text -->
                     <p
                        class="s-21 color--grey xl:!text-[1.3125rem] xl:!mt-[18px] !mb-0 lg:max-xl:!mt-[15px] lg:max-xl:!text-[1.18755rem] md:max-lg:!text-[1.32352rem] md:max-lg:!mt-[12px] sm:max-md:!text-[1.21875rem] sm:max-md:!mt-[12px] xsm:max-sm:!text-[1.1875rem] xsm:max-sm:!mt-[12px] xsm:max-sm:px-[3%] xsm:max-sm:py-0">
                       </p>
                  </div>
               </div>
            </div>
            <!-- FEATURES-2 WRAPPER -->
            <div class="fbox-wrapper !text-center">
               <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)]  row-cols-1 row-cols-md-3">
                  <!-- FEATURE BOX #1 -->
                  <div class="md:w-4/12 lg:w-4/12 xl:w-4/12 flex-[0_0_auto] w-full max-w-full px-[calc(0.5*_1.5rem)]">
                     <div class="fbox-2 fb-1 wow fadeInUp">
                        <!-- Image -->
                        <div
                           class="fbox-img gr--whitesmoke h--175 xl:!m-[0_8px_60px] xl:!pt-[42px] lg:max-xl:!mt-0 lg:max-xl:!mb-[50px] lg:max-xl:mx-0 lg:max-xl:pt-[35px] md:max-lg:!mt-0 md:max-lg:!mb-[45px] md:max-lg:mx-0 md:max-lg:pt-[30px] sm:max-md:!mt-0 sm:max-md:!mb-[50px] sm:max-md:mx-[10%] sm:max-md:pt-[46px] xsm:max-sm:!mt-0 xsm:max-sm:!mb-[50px] xsm:max-sm:mx-3 xsm:max-sm:pt-[40px] rounded-[12px_12px_0_0]">
                           <img
                              class="img-fluid light-theme-img mb-[-25px] xl:!max-h-[175px] md:max-lg:!max-h-32 sm:max-md:!max-h-[220px] xsm:max-sm:!max-h-[185px] lg:max-xl:!max-h-40 w-auto max-w-[inherit] inline-block"
                              src="images/f_01.png" alt="feature-image">
                          
                        </div>
                        <!-- Text -->
                        <div class="fbox-txt">
                           <h6
                              class="s-22 w--700 xl:!text-[1.375rem] lg:max-xl:!text-[1.25rem] md:max-lg:!text-[1.397058rem] sm:max-md:!text-[1.4375rem] xsm:max-sm:!text-[1.3125rem] xl:!leading-[1.35] font-Jakarta sm:max-md:!leading-[1.4] xsm:max-sm:!leading-[1.4] !font-bold !mb-[15px]">
                              {{ __('words.nextgen-1-title') }}</h6>
                           <p class="!mb-0">{{ __('words.nextgen-1-p') }}</p>
                        </div>
                     </div>
                  </div>
                  <!-- END FEATURE BOX #1 -->
                 
                  <!-- END FEATURE BOX #2 -->
                  <!-- FEATURE BOX #3 -->
                  <div class="md:w-4/12 lg:w-4/12 xl:w-4/12 flex-[0_0_auto] w-full max-w-full px-[calc(0.5*_1.5rem)]">
                     <div class="fbox-2 fb-3 wow fadeInUp">
                        <!-- Image -->
                        <div
                           class="fbox-img gr--whitesmoke h--175 xl:!m-[0_8px_60px] xl:!pt-[42px] lg:max-xl:!mt-0 lg:max-xl:!mb-[50px] lg:max-xl:mx-0 lg:max-xl:pt-[35px] md:max-lg:!mt-0 md:max-lg:!mb-[45px] md:max-lg:mx-0 md:max-lg:pt-[30px] sm:max-md:!mt-0 sm:max-md:!mb-[50px] sm:max-md:mx-[10%] sm:max-md:pt-[46px] xsm:max-sm:!mt-0 xsm:max-sm:!mb-[50px] xsm:max-sm:mx-3 xsm:max-sm:pt-[40px] rounded-[12px_12px_0_0]">
                           <img
                              class="img-fluid light-theme-img mb-[-25px] xl:!max-h-[175px] md:max-lg:!max-h-32 sm:max-md:!max-h-[220px] xsm:max-sm:!max-h-[185px] lg:max-xl:!max-h-40 w-auto max-w-[inherit] inline-block"
                              src="images/f_05.png" alt="feature-image">
                          
                        </div>
                        <!-- Text -->
                        <div class="fbox-txt">
                           <h6
                              class="s-22 w--700 xl:!text-[1.375rem] lg:max-xl:!text-[1.25rem] md:max-lg:!text-[1.397058rem] sm:max-md:!text-[1.4375rem] xsm:max-sm:!text-[1.3125rem] xl:!leading-[1.35] font-Jakarta sm:max-md:!leading-[1.4] xsm:max-sm:!leading-[1.4] !font-bold !mb-[15px]">
                              {{ __('words.nextgen-3-title') }}</h6>
                           <p class="!mb-0">{{ __('words.nextgen-3-p') }}</p>
                        </div>
                     </div>
                  </div>

                   <!-- FEATURE BOX #2 -->
                  <div class="md:w-4/12 lg:w-4/12 xl:w-4/12 flex-[0_0_auto] w-full max-w-full px-[calc(0.5*_1.5rem)]">
                     <div class="fbox-2 fb-2 wow fadeInUp">
                        <!-- Image -->
                        <div
                           class="fbox-img gr--whitesmoke h--175 xl:!m-[0_8px_60px] xl:!pt-[42px] lg:max-xl:!mt-0 lg:max-xl:!mb-[50px] lg:max-xl:mx-0 lg:max-xl:pt-[35px] md:max-lg:!mt-0 md:max-lg:!mb-[45px] md:max-lg:mx-0 md:max-lg:pt-[30px] sm:max-md:!mt-0 sm:max-md:!mb-[50px] sm:max-md:mx-[10%] sm:max-md:pt-[46px] xsm:max-sm:!mt-0 xsm:max-sm:!mb-[50px] xsm:max-sm:mx-3 xsm:max-sm:pt-[40px] rounded-[12px_12px_0_0]">
                           <img
                              class="img-fluid light-theme-img mb-[-25px] xl:!max-h-[175px] md:max-lg:!max-h-32 sm:max-md:!max-h-[220px] xsm:max-sm:!max-h-[185px] lg:max-xl:!max-h-40 w-auto max-w-[inherit] inline-block"
                              src="images/f_02.png" alt="feature-image">
                          
                        </div>
                        <!-- Text -->
                        <div class="fbox-txt">
                           <h6
                              class="s-22 w--700 xl:!text-[1.375rem] lg:max-xl:!text-[1.25rem] md:max-lg:!text-[1.397058rem] sm:max-md:!text-[1.4375rem] xsm:max-sm:!text-[1.3125rem] xl:!leading-[1.35] font-Jakarta sm:max-md:!leading-[1.4] xsm:max-sm:!leading-[1.4] !font-bold !mb-[15px]">
                              {{ __('words.nextgen-2-title') }}</h6>
                           <p class="!mb-0">{{ __('words.nextgen-2-p') }}</p>
                        </div>
                     </div>
                  </div>
                  <!-- END FEATURE BOX #3 -->
               </div>
               <!-- End row -->
            </div>
            <!-- END FEATURES-2 WRAPPER -->
         </div>
         <!-- End container -->
      </section>
      <!-- END FEATURES-2 -->
      <!-- DIVIDER LINE -->
      <hr
         class="divider w-full h-px bg-transparent bg-[linear-gradient(90deg,rgba(206,211,246,0)_0,#bbb_38%,#bbb_64%,rgba(206,211,246,0)_99%)] opacity-40 !m-0 ![border:none]">
      <!-- TEXT CONTENT
                     ============================================= -->
      <section id="lnk-1"
         class=" pt--100 pt-[100px] lg:max-xl:pt-[80px] md:max-lg:pt-[70px]  ct-02 content-section division">
         <div class="container">
            <!-- SECTION CONTENT (ROW) -->
            <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)]  items-center">
               <!-- IMAGE BLOCK -->
               <div
                  class="xl:w-6/12 lg:max-xl:w-6/12 md:max-lg:w-6/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full">
                  <div
                     class="img-block !text-center left-column wow fadeInRight mr-[30px] lg:max-xl:mr-[5px] md:max-lg:mr-0 sm:max-md:mx-[3%] xsm:max-sm:m-[0_2%_35px]">
                     <img class="img-fluid" src="images/img-06.png" alt="content-image">
                  </div>
               </div>
               <!-- TEXT BLOCK -->
               <div
                  class="xl:w-6/12 lg:max-xl:w-6/12 md:max-lg:w-6/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full">
                  <div class="txt-block right-column wow fadeInLeft">
                     <!-- Section ID -->
                  
                     <!-- Title -->
                     <h2
                        class="s-46 w--700 xl:!text-[2.875rem] lg:max-xl:!text-[2.625rem] md:max-lg:!text-[2.35294rem] sm:max-md:!text-[2.25rem] xsm:max-sm:!text-[1.8125rem] !font-bold lg:max-xl:!mb-[20px] md:max-lg:!mb-[15px] sm:max-md:!mb-[20px] xsm:max-sm:!mb-[15px] xl:!mb-[26px] leading-[1.25] font-Jakarta sm:max-md:!leading-[1.35] xsm:max-sm:!leading-[1.35]">
                        {{ __('words.inventorymanagement-title') }}</h2>
                     <!-- Text -->
                     <p>{{ __('words.inventorymanagement-p') }}</p>
                     <!-- Small Title -->
                     <h5
                        class="s-24 w--700 xl:!text-[1.5rem] lg:max-xl:!text-[1.375rem] md:max-lg:!text-[1.470588rem] sm:max-md:!text-[1.625rem] xsm:max-sm:!text-[1.4375rem] !font-bold xl:!mb-[20px] lg:max-xl:!mb-[18px] md:max-lg:!mb-[18px] sm:max-md:!mb-[18px] leading-[1.35] font-Jakarta sm:max-md:!leading-[1.4] xsm:max-sm:!leading-[1.4]">
                       {{ __('words.inventorymanagement-1-title') }}</h5>
                     <!-- CONTENT BOX #1 -->
                     <div class="cbox-1 ico-15 flex relative items-stretch justify-start [flex-flow:row_wrap] group">
                        <div class="ico-wrap color--theme ml-[8px]">
                           <div class="cbox-1-ico"><span
                                 class="flaticon-check relative right-[8px] top-px xsm:max-sm:right-[6px] xsm:max-sm:top-[0.5px]"></span>
                           </div>
                        </div>
                        <div class="cbox-1-txt overflow-hidden flex-1 max-w-full">
                           <p class="xl:!mb-[8px] lg:max-xl:!mb-[5px] md:max-lg:!mb-[5px] xsm:max-sm:!mb-[5px]">{{ __('words.inventorymanagement-list-1') }}</p>
                        </div>
                     </div>
                      <div class="cbox-1 ico-15 flex relative items-stretch justify-start [flex-flow:row_wrap] group">
                        <div class="ico-wrap color--theme ml-[8px]">
                           <div class="cbox-1-ico"><span
                                 class="flaticon-check relative right-[8px] top-px xsm:max-sm:right-[6px] xsm:max-sm:top-[0.5px]"></span>
                           </div>
                        </div>
                        <div class="cbox-1-txt overflow-hidden flex-1 max-w-full">
                           <p class="xl:!mb-[8px] lg:max-xl:!mb-[5px] md:max-lg:!mb-[5px] xsm:max-sm:!mb-[5px]">{{ __('words.inventorymanagement-list-2') }}</p>
                        </div>
                     </div>
                      <div class="cbox-1 ico-15 flex relative items-stretch justify-start [flex-flow:row_wrap] group">
                        <div class="ico-wrap color--theme ml-[8px]">
                           <div class="cbox-1-ico"><span
                                 class="flaticon-check relative right-[8px] top-px xsm:max-sm:right-[6px] xsm:max-sm:top-[0.5px]"></span>
                           </div>
                        </div>
                        <div class="cbox-1-txt overflow-hidden flex-1 max-w-full">
                           <p class="xl:!mb-[8px] lg:max-xl:!mb-[5px] md:max-lg:!mb-[5px] xsm:max-sm:!mb-[5px]">{{ __('words.inventorymanagement-list-3') }}</p>
                        </div>
                     </div>
                      <div class="cbox-1 ico-15 flex relative items-stretch justify-start [flex-flow:row_wrap] group">
                        <div class="ico-wrap color--theme ml-[8px]">
                           <div class="cbox-1-ico"><span
                                 class="flaticon-check relative right-[8px] top-px xsm:max-sm:right-[6px] xsm:max-sm:top-[0.5px]"></span>
                           </div>
                        </div>
                        <div class="cbox-1-txt overflow-hidden flex-1 max-w-full">
                           <p class="xl:!mb-[8px] lg:max-xl:!mb-[5px] md:max-lg:!mb-[5px] xsm:max-sm:!mb-[5px]">{{ __('words.inventorymanagement-list-4') }}</p>
                        </div>
                     </div>
                      <div class="cbox-1 ico-15 flex relative items-stretch justify-start [flex-flow:row_wrap] group">
                        <div class="ico-wrap color--theme ml-[8px]">
                           <div class="cbox-1-ico"><span
                                 class="flaticon-check relative right-[8px] top-px xsm:max-sm:right-[6px] xsm:max-sm:top-[0.5px]"></span>
                           </div>
                        </div>
                        <div class="cbox-1-txt overflow-hidden flex-1 max-w-full">
                           <p class="xl:!mb-[8px] lg:max-xl:!mb-[5px] md:max-lg:!mb-[5px] xsm:max-sm:!mb-[5px]">{{ __('words.inventorymanagement-list-5') }}</p>
                        </div>
                     </div>

                  </div>
               </div>
               <!-- END TEXT BLOCK -->
            </div>
            <!-- END SECTION CONTENT (ROW) -->
         </div>
         <!-- End container -->
      </section>
      <!-- END TEXT CONTENT -->
      <!-- FEATURES-12
                     ============================================= -->
      <section id="features-12"
         class="shape--bg shape--white-500 features-section division after:bg-[#f2f4f8] pt--100 pt-[100px] lg:max-xl:pt-[80px] md:max-lg:pt-[70px] after:absolute after:content-[''] after:z-[-1] after:w-[48%] after:h-[72%] after:left-[52%] after:top-[21%] lg:max-xl:after:!w-6/12 lg:max-xl:after:!h-[76%] lg:max-xl:after:!left-2/4 lg:max-xl:after:!top-[18%] md:max-lg:after:!w-[52%] md:max-lg:after:!h-3/4 md:max-lg:after:!left-[48%] md:max-lg:after:!top-[19%] xsm:max-sm:after:!h-[64%] xsm:max-sm:after:!top-[32.35%]">
         <div class="container">
            <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)]  items-center">
               <!-- TEXT BLOCK -->
               <div
                  class="md:w-5/12 lg:max-xl:w-5/12 xl:w-5/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full">
                  <div class="txt-block left-column wow fadeInRight">
                     <!-- Section ID -->
                     <span
                        class="section-id block !text-[0.85rem] leading-none !font-bold !tracking-[0.5px] uppercase xl:!mb-[35px] lg:max-xl:!mb-[30px] md:max-lg:!mb-[25px] sm:max-md:!mb-[25px] font-Jakarta">
                    
                        </span>
                     <!-- Title -->
                     <h2
                        class="s-46 w--700 xl:!text-[2.875rem] lg:max-xl:!text-[2.625rem] md:max-lg:!text-[2.35294rem] sm:max-md:!text-[2.25rem] xsm:max-sm:!text-[1.8125rem] !font-bold lg:max-xl:!mb-[20px] md:max-lg:!mb-[15px] sm:max-md:!mb-[20px] xsm:max-sm:!mb-[15px] xl:!mb-[26px] leading-[1.25] font-Jakarta sm:max-md:!leading-[1.35] xsm:max-sm:!leading-[1.35]">
                        {{ __('words.horaka-title') }}</h2>
                     <!-- List -->
                     <ul class="simple-list">
                        <li class="list-item">
                           <p>{{ __('words.horaka-p') }}
                           </p>
                        </li>
                       
                        <li class="list-item">
                           <p>{{ __('words.horaka-p-2') }}
                           </p>
                        </li>
                     </ul>
                     <!-- Button -->
                     <a href="#banner-3"
                        class="btn btn-sm rounded-[4px] btn--tra-black hover--theme mt-[25px] lg:max-xl:!mt-[22px] md:max-lg:!mt-[15px] sm:max-md:!mt-[18px] xsm:max-sm:!mt-[18px]">
                        {{ __('words.get-started') }}
                     </a>
                  </div>
               </div>
               <!-- END TEXT BLOCK -->
               <!-- FEATURES-12 WRAPPER -->
               <div
                  class="md:max-lg:w-7/12 lg:max-xl:w-7/12 xl:w-7/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full">
                  <div class="fbox-12-wrapper wow fadeInLeft pl-[45px] lg:max-xl:!pl-[30px] md:max-lg:!pl-0">
                     <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)]">
                        <div
                           class="xl:w-6/12 lg:max-xl:w-6/12 md:max-lg:w-6/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full">
                           <!-- FEATURE BOX #1 -->
                           <div id="fb-12-1"
                              class="fbox-12 bg--white-100 block-shadow rounded-[12px] mb--30 xl:!mb-[30px] px-[35px] py-[32px] lg:max-xl:!p-[30px] md:max-lg:px-[18px] md:max-lg:py-[22px] sm:max-md:!px-[50px] sm:max-md:py-[40px] xsm:max-sm:px-[30px] xsm:max-sm:py-[35px] shadow-[0_4px_12px_0_rgba(0,0,0,0.08)]">
                              <!-- Icon -->
                              <div class="fbox-ico ico-50 !mb-[20px] xsm:max-sm:!mb-[20px]">
                                 <div class="shape-ico color--theme relative inline-block !m-[0_auto]">
                                    <!-- Vector Icon -->
                                    <span class="flaticon-graphics relative z-[2]"></span>
                                    <!-- Shape -->
                                    <svg
                                       class="xl:!w-[130px] xl:!h-[130px] top-[-35px] left-[calc(50%_-_60px)] lg:max-xl:!w-[110px] lg:max-xl:!h-[110px] lg:max-xl:top-[-30px] lg:max-xl:left-[calc(50%_-_55px)] md:max-lg:!w-[95px] md:max-lg:!h-[95px] md:max-lg:top-[-25px] md:max-lg:left-[calc(50%_-_50px)] sm:max-md:!w-[125px] sm:max-md:!h-[125px] sm:max-md:top-[-35px] sm:max-md:left-[calc(50%_-_65px)] xsm:max-sm:!w-[120px] xsm:max-sm:!h-[120px] xsm:max-sm:top-[-35px] xsm:max-sm:left-[calc(50%_-_60px)] !absolute z-[1]"
                                       viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z"
                                          transform="translate(100 100)" />
                                    </svg>
                                 </div>
                              </div>
                              <!-- End Icon -->
                              <!-- Text -->
                              <div class="fbox-txt">
                                 <h5
                                    class="s-20 w--700 !text-[1.25rem] lg:max-xl:!text-[1.18755rem] sm:max-md:!text-[1.4375rem] xsm:max-sm:!text-[1.3125rem] !font-bold  mt-[20px] !mb-[10px] md:max-lg:!text-[1.3rem] md:max-lg:!mb-[10px] leading-[1.35] font-Jakarta sm:max-md:!leading-[1.4] xsm:max-sm:!leading-[1.4]">
                                   {{ __('words.horaka-list-1') }}</h5>
                                 <p class="!mb-0">{{ __('words.horaka-list-1-p') }}</p>
                              </div>
                           </div>
                           <!-- FEATURE BOX #2 -->
                           <div id="fb-12-2"
                              class="fbox-12 bg--white-100 block-shadow rounded-[12px] px-[35px] py-[32px] lg:max-xl:!p-[30px] md:max-lg:px-[18px] md:max-lg:py-[22px] sm:max-md:!px-[50px] sm:max-md:py-[40px] xsm:max-sm:px-[30px] xsm:max-sm:py-[35px] shadow-[0_4px_12px_0_rgba(0,0,0,0.08)]">
                              <!-- Icon -->
                              <div class="fbox-ico ico-50 !mb-[20px] xsm:max-sm:!mb-[20px]">
                                 <div class="shape-ico color--theme relative inline-block !m-[0_auto]">
                                    <!-- Vector Icon -->
                                    <span class="flaticon-graphic relative z-[2]"></span>
                                    <!-- Shape -->
                                    <svg
                                       class="xl:!w-[130px] xl:!h-[130px] top-[-35px] left-[calc(50%_-_60px)] lg:max-xl:!w-[110px] lg:max-xl:!h-[110px] lg:max-xl:top-[-30px] lg:max-xl:left-[calc(50%_-_55px)] md:max-lg:!w-[95px] md:max-lg:!h-[95px] md:max-lg:top-[-25px] md:max-lg:left-[calc(50%_-_50px)] sm:max-md:!w-[125px] sm:max-md:!h-[125px] sm:max-md:top-[-35px] sm:max-md:left-[calc(50%_-_65px)] xsm:max-sm:!w-[120px] xsm:max-sm:!h-[120px] xsm:max-sm:top-[-35px] xsm:max-sm:left-[calc(50%_-_60px)] !absolute z-[1]"
                                       viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z"
                                          transform="translate(100 100)" />
                                    </svg>
                                 </div>
                              </div>
                              <!-- End Icon -->
                              <!-- Text -->
                              <div class="fbox-txt">
                                 <h5
                                    class="s-20 w--700 !text-[1.25rem] lg:max-xl:!text-[1.18755rem] sm:max-md:!text-[1.4375rem] xsm:max-sm:!text-[1.3125rem] !font-bold  mt-[20px] !mb-[10px] md:max-lg:!text-[1.3rem] md:max-lg:!mb-[10px] leading-[1.35] font-Jakarta sm:max-md:!leading-[1.4] xsm:max-sm:!leading-[1.4]">
                                    {{ __('words.horaka-list-2') }}</h5>
                                 <p class="!mb-0">{{ __('words.horaka-list-2-p') }}</p>
                              </div>
                           </div>
                        </div>
                        <div
                           class="xl:w-6/12 lg:max-xl:w-6/12 md:max-lg:w-6/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full">
                           <!-- FEATURE BOX #3 -->
                           <div id="fb-12-3"
                              class="fbox-12 bg--white-100 block-shadow rounded-[12px] mb--30 xl:!mb-[30px] px-[35px] py-[32px] lg:max-xl:!p-[30px] md:max-lg:px-[18px] md:max-lg:py-[22px] sm:max-md:!px-[50px] sm:max-md:py-[40px] xsm:max-sm:px-[30px] xsm:max-sm:py-[35px] shadow-[0_4px_12px_0_rgba(0,0,0,0.08)]">
                              <!-- Icon -->
                              <div class="fbox-ico ico-50 !mb-[20px] xsm:max-sm:!mb-[20px]">
                                 <div class="shape-ico color--theme relative inline-block !m-[0_auto]">
                                    <!-- Vector Icon -->
                                    <span class="flaticon-idea relative z-[2]"></span>
                                    <!-- Shape -->
                                    <svg
                                       class="xl:!w-[130px] xl:!h-[130px] top-[-35px] left-[calc(50%_-_60px)] lg:max-xl:!w-[110px] lg:max-xl:!h-[110px] lg:max-xl:top-[-30px] lg:max-xl:left-[calc(50%_-_55px)] md:max-lg:!w-[95px] md:max-lg:!h-[95px] md:max-lg:top-[-25px] md:max-lg:left-[calc(50%_-_50px)] sm:max-md:!w-[125px] sm:max-md:!h-[125px] sm:max-md:top-[-35px] sm:max-md:left-[calc(50%_-_65px)] xsm:max-sm:!w-[120px] xsm:max-sm:!h-[120px] xsm:max-sm:top-[-35px] xsm:max-sm:left-[calc(50%_-_60px)] !absolute z-[1]"
                                       viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z"
                                          transform="translate(100 100)" />
                                    </svg>
                                 </div>
                              </div>
                              <!-- End Icon -->
                              <!-- Text -->
                              <div class="fbox-txt">
                                 <h5
                                    class="s-20 w--700 !text-[1.25rem] lg:max-xl:!text-[1.18755rem] sm:max-md:!text-[1.4375rem] xsm:max-sm:!text-[1.3125rem] !font-bold  mt-[20px] !mb-[10px] md:max-lg:!text-[1.3rem] md:max-lg:!mb-[10px] leading-[1.35] font-Jakarta sm:max-md:!leading-[1.4] xsm:max-sm:!leading-[1.4]">
                                    {{ __('words.horaka-list-3') }}</h5>
                                 <p class="!mb-0">{{ __('words.horaka-list-3-p') }}</p>
                              </div>
                           </div>
                           <!-- FEATURE BOX #4 -->
                           <div id="fb-12-4"
                              class="fbox-12 bg--white-100 block-shadow rounded-[12px] px-[35px] py-[32px] lg:max-xl:!p-[30px] md:max-lg:px-[18px] md:max-lg:py-[22px] sm:max-md:!px-[50px] sm:max-md:py-[40px] xsm:max-sm:px-[30px] xsm:max-sm:py-[35px] shadow-[0_4px_12px_0_rgba(0,0,0,0.08)]">
                              <!-- Icon -->
                              <div class="fbox-ico ico-50 !mb-[20px] xsm:max-sm:!mb-[20px]">
                                 <div class="shape-ico color--theme relative inline-block !m-[0_auto]">
                                    <!-- Vector Icon -->
                                    <span class="flaticon-search-engine-1 relative z-[2]"></span>
                                    <!-- Shape -->
                                    <svg
                                       class="xl:!w-[130px] xl:!h-[130px] top-[-35px] left-[calc(50%_-_60px)] lg:max-xl:!w-[110px] lg:max-xl:!h-[110px] lg:max-xl:top-[-30px] lg:max-xl:left-[calc(50%_-_55px)] md:max-lg:!w-[95px] md:max-lg:!h-[95px] md:max-lg:top-[-25px] md:max-lg:left-[calc(50%_-_50px)] sm:max-md:!w-[125px] sm:max-md:!h-[125px] sm:max-md:top-[-35px] sm:max-md:left-[calc(50%_-_65px)] xsm:max-sm:!w-[120px] xsm:max-sm:!h-[120px] xsm:max-sm:top-[-35px] xsm:max-sm:left-[calc(50%_-_60px)] !absolute z-[1]"
                                       viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z"
                                          transform="translate(100 100)" />
                                    </svg>
                                 </div>
                              </div>
                              <!-- End Icon -->
                              <!-- Text -->
                              <div class="fbox-txt">
                                 <h5
                                    class="s-20 w--700 !text-[1.25rem] lg:max-xl:!text-[1.18755rem] sm:max-md:!text-[1.4375rem] xsm:max-sm:!text-[1.3125rem] !font-bold  mt-[20px] !mb-[10px] md:max-lg:!text-[1.3rem] md:max-lg:!mb-[10px] leading-[1.35] font-Jakarta sm:max-md:!leading-[1.4] xsm:max-sm:!leading-[1.4]">
                                    {{ __('words.horaka-list-4') }}</h5>
                                 <p class="!mb-0">{{ __('words.horaka-list-4-p') }}</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End row -->
               </div>
               <!-- END FEATURES-12 WRAPPER -->
            </div>
            <!-- End row -->
         </div>
         <!-- End container -->
      </section>
      <!-- END FEATURES-12 -->

<section style="height: 630px !important;" id="banner-3" class=" pt--100 pt-[100px] lg:max-xl:pt-[80px] md:max-lg:pt-[70px]  banner-section">
      <div class="container">
        <!-- BANNER-3 WRAPPER -->
      
        <div class="banner-3-wrapper bg--03 bg--scroll rounded-[16px] relative overflow-hidden 
        !text-center sm:max-md:mr-[-15px] sm:max-md:ml-[-15px] sm:max-md:my-0 sm:max-md:rounded-[0_0] 
        xsm:max-sm:mr-[-15px] xsm:max-sm:ml-[-15px] xsm:max-sm:my-0 xsm:max-sm:rounded-[0_0] bg-no-repeat bg-[center_center] bg-cover 
        !bg-fixed "
         style="background-image: url('{{ asset('images/bg-03.jpg') }}');
         background-size: cover;
    background-position: center;
    background-repeat: no-repeat;"
         > 
          <div class="banner-overlay pt-[75px] !pb-[85px] px-[20%] md:max-lg:pt-[45px] md:max-lg:!pb-[55px] md:max-lg:px-[20%] lg:max-xl:pt-[60px] lg:max-xl:!pb-[70px] lg:max-xl:px-[22%] sm:max-md:pt-[55px] sm:max-md:!pb-[65px] sm:max-md:px-[60px] xsm:max-sm:pt-[60px] xsm:max-sm:!pb-[70px] xsm:max-sm:px-[30px] w-full h-full">
            <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)]">
              <!-- BANNER-3 TEXT -->
              <div class="col flex-[1_0_0%] w-full max-w-full px-[calc(0.5*_1.5rem)]">
                <div class="banner-3-txt color--white">
                  <!-- Title -->
                  <h2 class="s-48 w--700 xl:!text-[3rem] lg:max-xl:!text-[2.75rem] md:max-lg:!text-[2.5rem] sm:max-md:!text-[2.25rem] xsm:max-sm:!text-[1.9375rem] !font-bold leading-[1.25] font-Jakarta sm:max-md:!leading-[1.35] xsm:max-sm:!leading-[1.35]">
                    {{ __('words.free-trial-motto') }}</h2>
                  <!-- Text -->
                  <p class="p-xl mt-[20px] lg:max-xl:!mt-[15px] md:max-lg:!mt-[10px] sm:max-md:!mt-3 xsm:max-sm:!mt-3 xsm:max-sm:!text-[1.125rem] xl:!mb-[25px] lg:max-xl:!mb-[25px] md:max-lg:!mb-[20px] sm:max-md:!mb-[20px] xsm:max-sm:!mb-[20px]">
                    {{ __('words.free-trial-p') }}</p>
                  <!-- Button -->
                  <a href="https://app.qapera.com/registration" target="_blank" class="btn  !rounded-[4px]  btn--theme hover--tra-white">{{ __('words.Start-14-day-trial') }}</a>
                  <!-- Button Text -->
                  <p class="p-sm btn-txt ico-15 !m-[20px_0_0_0] lg:max-xl:!mt-[15px] lg:max-xl:!mb-0 lg:max-xl:mx-0 md:max-lg:!mt-[13px] md:max-lg:!mb-0 md:max-lg:mx-0 xsm:max-sm:!mt-[18px] xsm:max-sm:!mb-0 sm:max-md:!mt-[15px] sm:max-md:!mb-0 sm:max-md:mx-0">
                    <span class="flaticon-check relative right-[2px] top-[0.5px]"></span> {{ __('words.free-trial-btn') }}
                  </p>
                </div>
              </div>
              <!-- END BANNER-3 TEXT -->
            </div>
            <!-- End row -->
          </div>
          <!-- End banner overlay -->
        </div>
        <!-- END BANNER-3 WRAPPER -->
      </div>
      <!-- End container -->
    </section>


      <!-- TEXT CONTENT
                     ============================================= -->
      <section class=" pt--100 pt-[100px] lg:max-xl:pt-[80px] md:max-lg:pt-[70px]  ct-01 content-section division">
         <div class="container">
            <!-- SECTION CONTENT (ROW) -->
            <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)]  items-center">
               <!-- IMAGE BLOCK -->
               <div
                  class="xl:w-6/12 lg:max-xl:w-6/12 md:max-lg:w-6/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full">
                  <div
                     class="img-block !text-center left-column wow fadeInRight mr-[20px] lg:max-xl:mr-[15px] md:max-lg:mr-0 sm:max-md:mx-[3%] xsm:max-sm:m-[0_2%_35px]">
                     <img class="img-fluid" src="images/img-05.png" alt="content-image">
                  </div>
               </div>
               <!-- TEXT BLOCK -->
               <div
                  class="xl:w-6/12 lg:max-xl:w-6/12 md:max-lg:w-6/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full">
                  <div class="txt-block right-column wow fadeInLeft">
                     <!-- Section ID -->
                     <span
                        class="section-id block !text-[0.85rem] leading-none !font-bold !tracking-[0.5px] uppercase xl:!mb-[35px] lg:max-xl:!mb-[30px] md:max-lg:!mb-[25px] sm:max-md:!mb-[25px] font-Jakarta">
                       </span>
                     <!-- Title -->
                     <h3 style="font-size: 50px !important;"
                        class="s-46 w--700 xl:!text-[2.875rem] lg:max-xl:!text-[2.625rem] md:max-lg:!text-[2.35294rem] sm:max-md:!text-[2.25rem] xsm:max-sm:!text-[1.8125rem] !font-bold lg:max-xl:!mb-[20px] md:max-lg:!mb-[15px] sm:max-md:!mb-[20px] xsm:max-sm:!mb-[15px] xl:!mb-[26px] leading-[1.25] font-Jakarta sm:max-md:!leading-[1.35] xsm:max-sm:!leading-[1.35]">
                       {{ __('words.payment_title') }}</h3>
                     <!-- Text -->
                     <p>{{ __('words.payment_p') }}</p>
                     <!-- Small Title -->
                     <h5
                        class="s-24 w--700 xl:!text-[1.5rem] lg:max-xl:!text-[1.375rem] md:max-lg:!text-[1.470588rem] sm:max-md:!text-[1.625rem] xsm:max-sm:!text-[1.4375rem] !font-bold xl:!mb-[20px] lg:max-xl:!mb-[18px] md:max-lg:!mb-[18px] sm:max-md:!mb-[18px] leading-[1.35] font-Jakarta sm:max-md:!leading-[1.4] xsm:max-sm:!leading-[1.4]">
                       {{ __('words.payment_list_title') }}</h5>
                     <!-- List -->
                     <ul class="simple-list">
                        <li class="list-item">
                           <p>{{ __('words.payment_list_1') }}</p>
                        </li>
                        <li class="list-item">
                           <p>{{ __('words.payment_list_2') }}</p>
                        </li>
                           </p>
                        </li>
                        <li class="list-item">
                          <p>{{ __('words.payment_list_3') }}</p>
                        </li>
                     </ul>
                  </div>
               </div>
               <!-- END TEXT BLOCK -->
            </div>
            <!-- END SECTION CONTENT (ROW) -->
         </div>
         <!-- End container -->
      </section>
   
      <!-- END BANNER-3 -->
     
<section id="pricing-1" class="gr--whitesmoke pb--40 pb-[40px] inner-page-hero pricing-section pt-[180px] lg:max-xl:pt-[160px] md:max-lg:!mt-[80px] md:max-lg:pt-[70px]">
         <div class="container">
            <!-- SECTION TITLE -->
            <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)]  justify-center">
               <div class="md:w-10/12 lg:max-xl:w-8/12 xl:w-8/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full ">
                  <div class="section-title !text-center mb--70 mb-[70px] lg:max-xl:!mb-[60px] md:max-lg:!mb-[50px]">
                     <!-- Title -->
                     <h2 class="s-52 w--700 xl:!text-[3.25rem] lg:max-xl:!text-[3rem] md:max-lg:!text-[2.79411rem] sm:max-md:!text-[2.375rem] xsm:max-sm:!text-[2.0625rem] !font-bold !tracking-[-0.5px] leading-[1.25] font-Jakarta sm:max-md:!leading-[1.35] xsm:max-sm:!leading-[1.35]">
                       {{ __('words.pricing-motto') }}</h2>
                       <p>{{ __('words.pricing-p') }}</p>
                     <!-- TOGGLE BUTTON 
                     <div class="toggle-btn ext-toggle-btn !text-center toggle-btn-md mt--30 mt-[30px]">
                        <span class="toggler-txt xl:!text-[1.1rem] !font-normal leading-9 lg:max-xl:!text-[1.0625rem] lg:max-xl:leading-8 md:max-lg:!text-[1rem] md:max-lg:leading-8 sm:max-md:!text-[1.15rem] xsm:max-sm:!text-[1.15rem]">Billed
                           monthly</span>
                        <label class="switch-wrap min-w-[65px] xl:!h-[36px] mx-[8px] my-0 lg:max-xl:mx-1.5 lg:max-xl:my-0 md:max-lg:mx-1.5 md:max-lg:my-0 relative inline-block align-middle lg:max-xl:min-w-[50px] lg:max-xl:!h-[30px] md:max-lg:min-w-[50px] md:max-lg:!h-[30px]">
                           <input class="hidden" type="checkbox" id="checbox" onclick="check()">
                           <span class="switcher bg--grey switcher--theme bg-[#ccc] border-2 border-solid border-[#ccc] before:bg-white before:shadow-[0_1px_1px_0_#aaa] before:left-[4px] before:bottom-[3.5px] xl:!h-[36px] xl:!pl-[40px] xl:!pr-[20px] py-0 rounded-[36px] xl:before:!w-[26px] xl:before:!h-[26px] lg:max-xl:!pl-[30px] lg:max-xl:pr-[10px] lg:max-xl:py-0 lg:max-xl:rounded-[32px] md:max-lg:!h-[32px] md:max-lg:!pl-[30px] md:max-lg:pr-[10px] md:max-lg:py-0 block cursor-pointer !text-white xl:!text-[0.925rem] font-medium relative [transition:all_150ms_ease-in-out] before:absolute before:content-['_'] before:[transition:all_450ms_ease-in-out] before:rounded-[50%] lg:max-xl:!text-[0.9rem] lg:max-xl:!h-[32px] lg:max-xl:before:!w-[22px] lg:max-xl:before:!h-[22px] lg:max-xl:before:left-[4px] lg:max-xl:before:bottom-[3px] md:max-lg:before:!w-[22px] md:max-lg:before:!h-[22px] md:max-lg:before:left-[4px] md:max-lg:before:bottom-[3px] md:max-lg:!text-[0.85rem]">
                              <span class="show-annual hidden leading-9 lg:max-xl:leading-8 md:max-lg:leading-8"></span>
                              <span class="show-monthly block leading-9 lg:max-xl:leading-8 md:max-lg:leading-8"></span>
                           </span>
                        </label>
                        <span class="toggler-txt xl:!text-[1.1rem] !font-normal leading-9 lg:max-xl:!text-[1.0625rem] lg:max-xl:leading-8 md:max-lg:!text-[1rem] md:max-lg:leading-8 sm:max-md:!text-[1.15rem] xsm:max-sm:!text-[1.15rem]">Billed
                           yearly</span>
                        <p class="color--theme tracking-[-0.25px] !mt-[10px] !mb-0">Save up to 35% with yearly billing
                        </p>
                     </div>
                     ---->
                  </div>
               </div>
            </div>
            <!-- END SECTION TITLE -->
            <!-- PRICING TABLES -->
            <div class="pricing-1-wrapper">
               <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)]  row-cols-1 row-cols-md-3">
                  <!-- STARTER PLAN -->
                  <div class="col md:max-lg:w-4/12 lg:w-4/12 xl:w-4/12 flex-[0_0_auto] w-full max-w-full px-[calc(0.5*_1.5rem)]">
                     <div id="pt--1-1" class="p-table pricing-1-table xl:!pt-[50px] xl:!pb-[45px] xl:!px-[38px] lg:max-xl:pt-[40px] lg:max-xl:!pb-[35px] lg:max-xl:px-[25px] md:max-lg:pt-[30px] md:max-lg:!pb-[25px] md:max-lg:px-[25px] sm:max-md:pt-[35px] sm:max-md:!pb-[40px] sm:max-md:px-[30px] xsm:max-sm:px-[40px] xsm:max-sm:py-[35px] bg--white-100 block-shadow rounded-[12px] wow fadeInUp xl:!mb-[50px] lg:max-xl:!mb-[40px] md:max-lg:!mb-[35px] sm:max-md:!mb-[40px] xsm:max-sm:!mb-[40px] shadow-[0_4px_12px_0_rgba(0,0,0,0.08)]" style="visibility: visible; animation-name: fadeInUp;">
                        <!-- TABLE HEADER -->
                        <div class="pricing-table-header relative">
                           <!-- Title -->
                           <h5 class="s-24 w--700 xl:!text-[1.5rem] !font-bold mb--30 xl:!mb-[30px] lg:max-xl:!mb-[25px] md:max-lg:!mb-[20px] sm:max-md:!text-[1.6875rem] xsm:max-sm:!text-[1.5625rem] leading-[1.35] font-Jakarta sm:max-md:!leading-[1.4] xsm:max-sm:!leading-[1.4]">
                              {{__('words.pack-1-title')}}</h5>
                           <!-- Price -->
                           <div class="price">
                              <span class="color--black xl:!text-[3rem] leading-none font-semibold tracking-[-2px] font-Jakarta lg:max-xl:!text-[2.85rem] lg:max-xl:tracking-[-1.5px] md:max-lg:!text-[2.45rem] md:max-lg:tracking-[-1.5px] sm:max-md:!text-[2.875rem] sm:max-md:tracking-[-1.5px] xsm:max-sm:!text-[2.75rem]">
                                 {{__('words.pack-1-price-mon')}} 
                              <sup class="validity color--grey tracking-[-1px] right-[2px] xl:!text-[1.4rem] !font-normal left-0 -top-[2px] font-Jakarta lg:max-xl:!text-[1.45rem] md:max-lg:!text-[1.2rem] sm:max-md:!text-[1.4375rem] xsm:max-sm:!text-[1.3125rem]">
                                 &nbsp;{{__('words.mth')}}</sup></span>
                             
                             <p style="font-size: 32px;margin-top: 0px;">{{__('words.pack-1-price')}}</p>
                              <p class="color--grey my-[25px] lg:max-xl:!mt-[40px] lg:max-xl:!mb-[15px] md:max-lg:!text-[0.9075rem] md:max-lg:my-[14px]">
                                  {{__('words.pack-1-p')}}</p>
                           </div>
                           <!-- Button -->
                           <a href="#" class="pt--btn btn  !rounded-[4px]  btn--theme hover--theme">{{__('words.Start-14-day-trial')}}</a>
                           
                        </div>
                        <!-- END TABLE HEADER -->
                        <!-- PRICING FEATURES -->
                        <ul class="pricing-features color--black ico-10 ico--green mt--25 mt-[25px]">
                           <li class="px-[8px] py-[11px] md:max-lg:px-0 md:max-lg:py-1.5 sm:max-md:px-[8px] sm:max-md:py-[10px] xsm:max-sm:px-[8px] xsm:max-sm:py-[10px]">
                              <p><span class="flaticon-check"></span> {{__('words.pack-1-list-1')}}</p>
                           </li>
                           <li class="px-[8px] py-[11px] md:max-lg:px-0 md:max-lg:py-1.5 sm:max-md:px-[8px] sm:max-md:py-[10px] xsm:max-sm:px-[8px] xsm:max-sm:py-[10px]">
                              <p><span class="flaticon-check"></span> {{__('words.pack-1-list-2')}}</p>
                           </li>
                           <li class="px-[8px] py-[11px] md:max-lg:px-0 md:max-lg:py-1.5 sm:max-md:px-[8px] sm:max-md:py-[10px] xsm:max-sm:px-[8px] xsm:max-sm:py-[10px]">
                              <p><span class="flaticon-check"></span> {{__('words.pack-1-list-3')}}</p>
                           </li>
                           <li class=" px-[8px] py-[11px] md:max-lg:px-0 md:max-lg:py-1.5 sm:max-md:px-[8px] sm:max-md:py-[10px] xsm:max-sm:px-[8px] xsm:max-sm:py-[10px]">
                              <p><span class="flaticon-check"></span> {{__('words.pack-1-list-4')}}</p>
                           </li>
                           <li class=" px-[8px] py-[11px] md:max-lg:px-0 md:max-lg:py-1.5 sm:max-md:px-[8px] sm:max-md:py-[10px] xsm:max-sm:px-[8px] xsm:max-sm:py-[10px]">
                              <p><span class="flaticon-check"></span> {{__('words.pack-1-list-5')}}</p>
                           </li>
                           
                        </ul>
                     </div>
                  </div>
                  <!-- END STARTER PLAN -->
                    <!-- STARTER PLAN -->
                  <div class="col md:max-lg:w-4/12 lg:w-4/12 xl:w-4/12 flex-[0_0_auto] w-full max-w-full px-[calc(0.5*_1.5rem)]">
                     <div id="pt--1-1" class="p-table pricing-1-table xl:!pt-[50px] xl:!pb-[45px] xl:!px-[38px] lg:max-xl:pt-[40px] lg:max-xl:!pb-[35px] lg:max-xl:px-[25px] md:max-lg:pt-[30px] md:max-lg:!pb-[25px] md:max-lg:px-[25px] sm:max-md:pt-[35px] sm:max-md:!pb-[40px] sm:max-md:px-[30px] xsm:max-sm:px-[40px] xsm:max-sm:py-[35px] bg--white-100 block-shadow rounded-[12px] wow fadeInUp xl:!mb-[50px] lg:max-xl:!mb-[40px] md:max-lg:!mb-[35px] sm:max-md:!mb-[40px] xsm:max-sm:!mb-[40px] shadow-[0_4px_12px_0_rgba(0,0,0,0.08)]" style="visibility: visible; animation-name: fadeInUp;">
                        <!-- TABLE HEADER -->
                        <div class="pricing-table-header relative">
                           <!-- Title -->
                           <h5 class="s-24 w--700 xl:!text-[1.5rem] !font-bold mb--30 xl:!mb-[30px] lg:max-xl:!mb-[25px] md:max-lg:!mb-[20px] sm:max-md:!text-[1.6875rem] xsm:max-sm:!text-[1.5625rem] leading-[1.35] font-Jakarta sm:max-md:!leading-[1.4] xsm:max-sm:!leading-[1.4]">
                              {{__('words.pack-2-title')}}</h5>
                           <!-- Price -->
                           <div class="price">
                              <span class="color--black xl:!text-[3rem] leading-none font-semibold tracking-[-2px] font-Jakarta lg:max-xl:!text-[2.85rem] lg:max-xl:tracking-[-1.5px] md:max-lg:!text-[2.45rem] md:max-lg:tracking-[-1.5px] sm:max-md:!text-[2.875rem] sm:max-md:tracking-[-1.5px] xsm:max-sm:!text-[2.75rem]">
                                 {{__('words.pack-2-price-mon')}} <sup class="validity color--grey tracking-[-1px] right-[2px] xl:!text-[1.4rem] !font-normal left-0 -top-[2px] font-Jakarta lg:max-xl:!text-[1.45rem] md:max-lg:!text-[1.2rem] sm:max-md:!text-[1.4375rem] xsm:max-sm:!text-[1.3125rem]">
                                 &nbsp;{{__('words.mth')}}</sup></span>
                             
                             <p style="font-size: 32px;margin-top: 0px;">{{__('words.pack-2-price')}}</p>
                              <p class="color--grey my-[25px] lg:max-xl:!mt-[40px] lg:max-xl:!mb-[15px] md:max-lg:!text-[0.9075rem] md:max-lg:my-[14px]">
                                  {{__('words.pack-2-p')}}</p>
                           </div>
                           <!-- Button -->
                           <a href="#" class="pt--btn btn  !rounded-[4px]  btn--theme hover--theme">{{__('words.Start-14-day-trial')}}</a>
                           
                        </div>
                        <!-- END TABLE HEADER -->
                        <!-- PRICING FEATURES -->
                        <ul class="pricing-features color--black ico-10 ico--green mt--25 mt-[25px]">
                           <li class="px-[8px] py-[11px] md:max-lg:px-0 md:max-lg:py-1.5 sm:max-md:px-[8px] sm:max-md:py-[10px] xsm:max-sm:px-[8px] xsm:max-sm:py-[10px]">
                              <p><span class="flaticon-check"></span> {{__('words.pack-2-list-1')}}</p>
                           </li>
                           <li class="px-[8px] py-[11px] md:max-lg:px-0 md:max-lg:py-1.5 sm:max-md:px-[8px] sm:max-md:py-[10px] xsm:max-sm:px-[8px] xsm:max-sm:py-[10px]">
                              <p><span class="flaticon-check"></span> {{__('words.pack-2-list-2')}}</p>
                           </li>
                           <li class="px-[8px] py-[11px] md:max-lg:px-0 md:max-lg:py-1.5 sm:max-md:px-[8px] sm:max-md:py-[10px] xsm:max-sm:px-[8px] xsm:max-sm:py-[10px]">
                              <p><span class="flaticon-check"></span> {{__('words.pack-2-list-3')}}</p>
                           </li>
                           <li class=" px-[8px] py-[11px] md:max-lg:px-0 md:max-lg:py-1.5 sm:max-md:px-[8px] sm:max-md:py-[10px] xsm:max-sm:px-[8px] xsm:max-sm:py-[10px]">
                              <p><span class="flaticon-check"></span> {{__('words.pack-2-list-4')}}</p>
                           </li>
                           <li class=" px-[8px] py-[11px] md:max-lg:px-0 md:max-lg:py-1.5 sm:max-md:px-[8px] sm:max-md:py-[10px] xsm:max-sm:px-[8px] xsm:max-sm:py-[10px]">
                              <p><span class="flaticon-check"></span> {{__('words.pack-2-list-5')}}</p>
                           </li>
                           
                        </ul>
                     </div>
                  </div>
                  <!-- END STARTER PLAN -->
                    <!-- STARTER PLAN -->
                  <div class="col md:max-lg:w-4/12 lg:w-4/12 xl:w-4/12 flex-[0_0_auto] w-full max-w-full px-[calc(0.5*_1.5rem)]">
                     <div id="pt--1-1" class="p-table pricing-1-table xl:!pt-[50px] xl:!pb-[45px] xl:!px-[38px] lg:max-xl:pt-[40px] lg:max-xl:!pb-[35px] lg:max-xl:px-[25px] md:max-lg:pt-[30px] md:max-lg:!pb-[25px] md:max-lg:px-[25px] sm:max-md:pt-[35px] sm:max-md:!pb-[40px] sm:max-md:px-[30px] xsm:max-sm:px-[40px] xsm:max-sm:py-[35px] bg--white-100 block-shadow rounded-[12px] wow fadeInUp xl:!mb-[50px] lg:max-xl:!mb-[40px] md:max-lg:!mb-[35px] sm:max-md:!mb-[40px] xsm:max-sm:!mb-[40px] shadow-[0_4px_12px_0_rgba(0,0,0,0.08)]" style="visibility: visible; animation-name: fadeInUp;">
                        <!-- TABLE HEADER -->
                        <div class="pricing-table-header relative">
                           <!-- Title -->
                           <h5 class="s-24 w--700 xl:!text-[1.5rem] !font-bold mb--30 xl:!mb-[30px] lg:max-xl:!mb-[25px] md:max-lg:!mb-[20px] sm:max-md:!text-[1.6875rem] xsm:max-sm:!text-[1.5625rem] leading-[1.35] font-Jakarta sm:max-md:!leading-[1.4] xsm:max-sm:!leading-[1.4]">
                              {{__('words.pack-3-title')}}</h5>
                           <!-- Price -->
                           <div class="price">
                              <span class="color--black xl:!text-[3rem] leading-none font-semibold tracking-[-2px] font-Jakarta lg:max-xl:!text-[2.85rem] lg:max-xl:tracking-[-1.5px] md:max-lg:!text-[2.45rem] md:max-lg:tracking-[-1.5px] sm:max-md:!text-[2.875rem] sm:max-md:tracking-[-1.5px] xsm:max-sm:!text-[2.75rem]">
                                 {{__('words.pack-3-price-mon')}} <sup class="validity color--grey tracking-[-1px] right-[2px] xl:!text-[1.4rem] !font-normal left-0 -top-[2px] font-Jakarta lg:max-xl:!text-[1.45rem] md:max-lg:!text-[1.2rem] sm:max-md:!text-[1.4375rem] xsm:max-sm:!text-[1.3125rem]">
                                 &nbsp;{{__('words.mth')}}</sup></span>
                             
                             <p style="font-size: 32px;margin-top: 0px;">{{__('words.pack-3-price')}}</p>
                              <p class="color--grey my-[25px] lg:max-xl:!mt-[40px] lg:max-xl:!mb-[15px] md:max-lg:!text-[0.9075rem] md:max-lg:my-[14px]">
                                  {{__('words.pack-3-p')}}</p>
                           </div>
                           <!-- Button -->
                           <a href="#" class="pt--btn btn  !rounded-[4px]  btn--theme hover--theme">{{__('words.Start-14-day-trial')}}</a>
                           
                        </div>
                        <!-- END TABLE HEADER -->
                        <!-- PRICING FEATURES -->
                        <ul class="pricing-features color--black ico-10 ico--green mt--25 mt-[25px]">
                           <li class="px-[8px] py-[11px] md:max-lg:px-0 md:max-lg:py-1.5 sm:max-md:px-[8px] sm:max-md:py-[10px] xsm:max-sm:px-[8px] xsm:max-sm:py-[10px]">
                              <p><span class="flaticon-check"></span> {{__('words.pack-3-list-1')}}</p>
                           </li>
                           <li class="px-[8px] py-[11px] md:max-lg:px-0 md:max-lg:py-1.5 sm:max-md:px-[8px] sm:max-md:py-[10px] xsm:max-sm:px-[8px] xsm:max-sm:py-[10px]">
                              <p><span class="flaticon-check"></span> {{__('words.pack-3-list-2')}}</p>
                           </li>
                           <li class="px-[8px] py-[11px] md:max-lg:px-0 md:max-lg:py-1.5 sm:max-md:px-[8px] sm:max-md:py-[10px] xsm:max-sm:px-[8px] xsm:max-sm:py-[10px]">
                              <p><span class="flaticon-check"></span> {{__('words.pack-3-list-3')}}</p>
                           </li>
                           <li class=" px-[8px] py-[11px] md:max-lg:px-0 md:max-lg:py-1.5 sm:max-md:px-[8px] sm:max-md:py-[10px] xsm:max-sm:px-[8px] xsm:max-sm:py-[10px]">
                              <p><span class="flaticon-check"></span> {{__('words.pack-3-list-4')}}</p>
                           </li>
                           <li class=" px-[8px] py-[11px] md:max-lg:px-0 md:max-lg:py-1.5 sm:max-md:px-[8px] sm:max-md:py-[10px] xsm:max-sm:px-[8px] xsm:max-sm:py-[10px]">
                              <p><span class="flaticon-check"></span> {{__('words.pack-3-list-5')}}</p>
                           </li>
                           
                        </ul>
                     </div>
                  </div>
                  <!-- END STARTER PLAN -->
                 
               </div>
            </div>
            <!-- PRICING TABLES -->
         </div>
         <!-- End container -->
      </section>
<section id="lnk-2"
         class="bg--white-400  py--100 py-[100px] lg:max-xl:py-[80px] md:max-lg:py-[70px]  ct-04 content-section division">
         <div class="container">
            <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)]  justify-center">
               <div class="md:w-10/12 lg:max-xl:w-9/12 xl:w-9/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full">
                  <div class="section-title mb--70 xl:!mb-[70px] lg:max-xl:!mb-[60px] md:max-lg:!mb-[50px] !text-center">
                     <!-- Title -->
                     <h2 class="s-50 w--700 xl:!text-[3.125rem] lg:max-xl:!text-[2.875rem] md:max-lg:!text-[2.64705rem] sm:max-md:!text-[2.375rem] xsm:max-sm:!text-[2.0625rem] !font-bold lg:max-xl:!mb-[20px] md:max-lg:!mb-[15px] sm:max-md:!mb-[20px] xsm:max-sm:!mb-[15px] xl:!mb-[26px] xl:!leading-[1.25] font-Jakarta sm:max-md:!leading-[1.35] xsm:max-sm:!leading-[1.35] !tracking-[-0.5px]">
                      {{__('words.integrations-motto')}}</h2>
                     <!-- Text -->
                     <p class="s-21 color--grey xl:!text-[1.3125rem] xl:!mt-[18px] !mb-0 lg:max-xl:!mt-[15px] lg:max-xl:!text-[1.18755rem] md:max-lg:!text-[1.32352rem] md:max-lg:!mt-[12px] sm:max-md:!text-[1.21875rem] sm:max-md:!mt-[12px] xsm:max-sm:!text-[1.1875rem] xsm:max-sm:!mt-[12px] xsm:max-sm:px-[3%] xsm:max-sm:py-0">
                        {{__('words.integrations-p')}}</p>
                  </div>
               </div>
            </div>
            <!-- SECTION CONTENT (ROW) -->
            <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)]  items-center">
               <!-- TEXT BLOCK -->
               <div
                  class="md:w-6/12 lg:max-xl:w-6/12 xl:w-6/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full order-last order-md-2 md:max-lg:order-2 lg:max-xl:order-2 xl:order-2">
                  <div class="txt-block left-column wow fadeInRight">
                     <!-- CONTENT BOX #1 -->
                     <div
                        class="cbox-2 process-step flex relative items-stretch justify-start [flex-flow:row_wrap] group">
                        <!-- Icon -->
                        <div
                           class="ico-wrap relative mr-[1.625rem] lg:max-xl:mr-[1.1rem] md:max-lg:mr-[1.15rem] xsm:max-sm:mr-4">
                           <div
                              class="cbox-2-ico bg--theme color--white relative xl:!w-[2.625rem] xl:!h-[2.625rem] !text-center xl:!text-[1.1875rem] font-medium leading-[2.375rem] [transition:all_450ms_ease-in-out] rounded-[100%] [border:2px_solid_transparent] lg:max-xl:!w-[2.35rem] lg:max-xl:!h-[2.35rem] lg:max-xl:!text-[1.135rem] lg:max-xl:leading-8 md:max-lg:!w-[2.15rem] md:max-lg:!h-[2.15rem] md:max-lg:!text-[1.125rem] md:max-lg:!leading-[1.85rem] xsm:max-sm:!w-[2.3rem] xsm:max-sm:!h-[2.3rem] xsm:max-sm:!text-[1.15rem] xsm:max-sm:!leading-[2.05rem] group-hover:!bg-transparent group-hover:scale-110">
                              1</div>
                           <span
                              class="cbox-2-line !absolute !w-[2px] bg-[#e4e4e4] xl:!h-[calc(100%_-_90px)] -translate-x-2/4 left-2/4 bottom-5 lg:max-xl:!h-[calc(100%_-_74px)] md:max-lg:!h-[calc(100%_-_74px)] xsm:max-sm:!h-[calc(100%_-_74px)]"></span>
                        </div>
                        <!-- Text -->
                        <div
                           class="cbox-2-txt overflow-hidden flex-1 max-w-full mb-[35px] lg:max-xl:!mb-[25px] md:max-lg:!mb-[20px] xsm:max-sm:!mb-[25px]">
                           <h5
                              class="s-22 w--700 xl:!text-[1.375rem] lg:max-xl:!text-[1.25rem] md:max-lg:!text-[1.397058rem] sm:max-md:!text-[1.4375rem] xsm:max-sm:!text-[1.3125rem] xl:!mb-[15px] lg:max-xl:!mb-[12px] md:max-lg:!mb-[10px] sm:max-md:!mb-[12px] xsm:max-sm:!mb-[12px] !font-bold font-Jakarta">
                              {{ __('words.integration-line-1-title') }}</h5>
                           <p class="!leading-[1.6666] !mb-0">{{ __('words.integration-line-1-p') }}
                           </p>
                        </div>
                     </div>
                     <!-- END CONTENT BOX #1 -->
                     <!-- CONTENT BOX #2 -->
                     <div
                        class="cbox-2 process-step flex relative items-stretch justify-start [flex-flow:row_wrap] group">
                        <!-- Icon -->
                        <div
                           class="ico-wrap relative mr-[1.625rem] lg:max-xl:mr-[1.1rem] md:max-lg:mr-[1.15rem] xsm:max-sm:mr-4">
                           <div
                              class="cbox-2-ico bg--theme color--white relative xl:!w-[2.625rem] xl:!h-[2.625rem] !text-center xl:!text-[1.1875rem] font-medium leading-[2.375rem] [transition:all_450ms_ease-in-out] rounded-[100%] [border:2px_solid_transparent] lg:max-xl:!w-[2.35rem] lg:max-xl:!h-[2.35rem] lg:max-xl:!text-[1.135rem] lg:max-xl:leading-8 md:max-lg:!w-[2.15rem] md:max-lg:!h-[2.15rem] md:max-lg:!text-[1.125rem] md:max-lg:!leading-[1.85rem] xsm:max-sm:!w-[2.3rem] xsm:max-sm:!h-[2.3rem] xsm:max-sm:!text-[1.15rem] xsm:max-sm:!leading-[2.05rem] group-hover:!bg-transparent group-hover:scale-110">
                              2</div>
                           <span
                              class="cbox-2-line !absolute !w-[2px] bg-[#e4e4e4] xl:!h-[calc(100%_-_90px)] -translate-x-2/4 left-2/4 bottom-5 lg:max-xl:!h-[calc(100%_-_74px)] md:max-lg:!h-[calc(100%_-_74px)] xsm:max-sm:!h-[calc(100%_-_74px)]"></span>
                        </div>
                        <!-- Text -->
                        <div
                           class="cbox-2-txt overflow-hidden flex-1 max-w-full mb-[35px] lg:max-xl:!mb-[25px] md:max-lg:!mb-[20px] xsm:max-sm:!mb-[25px]">
                           <h5
                              class="s-22 w--700 xl:!text-[1.375rem] lg:max-xl:!text-[1.25rem] md:max-lg:!text-[1.397058rem] sm:max-md:!text-[1.4375rem] xsm:max-sm:!text-[1.3125rem] xl:!mb-[15px] lg:max-xl:!mb-[12px] md:max-lg:!mb-[10px] sm:max-md:!mb-[12px] xsm:max-sm:!mb-[12px] !font-bold font-Jakarta">
                              {{ __('words.integration-line-2-title') }}</h5>
                           <p class="!leading-[1.6666] !mb-0">{{ __('words.integration-line-2-p') }}
                           </p>
                        </div>
                     </div>
                     <!-- END CONTENT BOX #2 -->
                     <!-- CONTENT BOX #3 -->
                     <div
                        class="cbox-2 process-step flex relative items-stretch justify-start [flex-flow:row_wrap] group">
                        <!-- Icon -->
                        <div
                           class="ico-wrap relative mr-[1.625rem] lg:max-xl:mr-[1.1rem] md:max-lg:mr-[1.15rem] xsm:max-sm:mr-4">
                           <div
                              class="cbox-2-ico bg--theme color--white relative xl:!w-[2.625rem] xl:!h-[2.625rem] !text-center xl:!text-[1.1875rem] font-medium leading-[2.375rem] [transition:all_450ms_ease-in-out] rounded-[100%] [border:2px_solid_transparent] lg:max-xl:!w-[2.35rem] lg:max-xl:!h-[2.35rem] lg:max-xl:!text-[1.135rem] lg:max-xl:leading-8 md:max-lg:!w-[2.15rem] md:max-lg:!h-[2.15rem] md:max-lg:!text-[1.125rem] md:max-lg:!leading-[1.85rem] xsm:max-sm:!w-[2.3rem] xsm:max-sm:!h-[2.3rem] xsm:max-sm:!text-[1.15rem] xsm:max-sm:!leading-[2.05rem] group-hover:!bg-transparent group-hover:scale-110">
                              3</div>
                        </div>
                        <!-- Text -->
                        <div
                           class="cbox-2-txt overflow-hidden flex-1 max-w-full mb-[35px] lg:max-xl:!mb-[25px] md:max-lg:!mb-[20px] xsm:max-sm:!mb-[25px]">
                           <h5
                              class="s-22 w--700 xl:!text-[1.375rem] lg:max-xl:!text-[1.25rem] md:max-lg:!text-[1.397058rem] sm:max-md:!text-[1.4375rem] xsm:max-sm:!text-[1.3125rem] xl:!mb-[15px] lg:max-xl:!mb-[12px] md:max-lg:!mb-[10px] sm:max-md:!mb-[12px] xsm:max-sm:!mb-[12px] !font-bold font-Jakarta">
                              {{ __('words.integration-line-3-title') }}</h5>
                           <p class="!leading-[1.6666] !mb-0">{{ __('words.integration-line-3-p') }}
                           </p>
                        </div>
                     </div>
                     <!-- END CONTENT BOX #3 -->
                  </div>
               </div>
               <!-- END TEXT BLOCK -->
               <!-- IMAGE BLOCK -->
               <div
                  class="md:w-6/12 lg:max-xl:w-6/12 xl:w-6/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full order-first order-md-2 md:max-lg:order-2 lg:max-xl:order-2 xl:order-2">
                  <div class="img-block !text-center wow fadeInLeft ml-[30px] lg:max-xl:ml-[15px] md:max-lg:ml-[15px]">
                     <img class="img-fluid max-w-none inline-block lg:max-xl:!max-w-[175%] md:max-lg:!max-w-[220%]"
                        src="images/tablet-02.png" alt="content-image">
                  </div>
               </div>
            </div>
            <!-- END SECTION CONTENT (ROW) -->
         </div>
         <!-- End container -->
      </section>

      <section id="integrations-1" class=" pt--100 pt-[100px] lg:max-xl:pt-[80px] md:max-lg:pt-[70px]  integrations-section">
         <div class="container">
            <!-- SECTION TITLE -->
            <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)]  justify-center">
               <div class="md:w-10/12 lg:max-xl:w-9/12 xl:w-9/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full">
                  <div class="section-title mb--70 xl:!mb-[70px] lg:max-xl:!mb-[60px] md:max-lg:!mb-[50px] !text-center">
                     <!-- Title -->
                     <h2 class="s-52 w--700 xl:!text-[3.25rem] lg:max-xl:!text-[3rem] md:max-lg:!text-[2.79411rem] sm:max-md:!text-[2.375rem] xsm:max-sm:!text-[2.0625rem] !font-bold leading-[1.25] font-Jakarta sm:max-md:!leading-[1.35] xsm:max-sm:!leading-[1.35] !tracking-[-0.5px]">
                        {{ __('words.integrations') }}</h2>
                     <!-- Text -->
                     <p class="s-21 color--grey xl:!text-[1.3125rem] xl:!mt-[18px] !mb-0 lg:max-xl:!mt-[15px] lg:max-xl:!text-[1.18755rem] md:max-lg:!text-[1.32352rem] md:max-lg:!mt-[12px] sm:max-md:!text-[1.21875rem] sm:max-md:!mt-[12px] xsm:max-sm:!text-[1.1875rem] xsm:max-sm:!mt-[12px] xsm:max-sm:px-[3%] xsm:max-sm:py-0">
                        {{ __('words.integrations-p') }}</p>
                  </div>
               </div>
            </div>
            <!-- INTEGRATIONS-1 WRAPPER -->
            <div class="integrations-1-wrapper">
               <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)]  row-cols-1 row-cols-md-2 row-cols-lg-3 rows-2">
                  <!-- TOOL #1 -->
                  <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 flex-[0_0_auto] w-full max-w-full px-[calc(0.5*_1.5rem)]">
                     <a href="#" class="in_tool !flex relative items-stretch justify-start border px-[20px] py-[22px] border-solid border-[#ccc] hover:shadow-[0_4px_12px_0_rgba(0,0,0,0.08)] hover:border-transparent [flex-flow:row_wrap] lg:max-xl:px-[20px] lg:max-xl:py-4 md:max-lg:!p-[16px] sm:max-md:!p-[25px] xsm:max-sm:px-[25px] xsm:max-sm:py-[20px] it-1 rounded-[12px] mb--30 xl:!mb-[30px] wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <!-- Icon -->
                        <div class="in_tool-logo-wrap">
                           <div class="in_tool-logo ico-60 relative mr-[20px]">
                              <img class="" width="160" src="images/integrations/adisyo-logo-home.webp" alt="brand-logo">
                           </div>
                        </div>
                        <!-- Text -->
                        <div class="in_tool-txt overflow-hidden flex-1 max-w-full">
                           <h6 class="s-20 w--200 xl:!text-[1.25rem] lg:max-xl:!text-[1.18755rem] md:max-lg:!text-[1.397058rem] md:max-lg:!leading-[1.3] !font-bold font-Jakarta mt-[5px] md:max-lg:!mt-[2px] sm:max-md:!text-[1.4rem] sm:max-md:!leading-none sm:max-md:!mt-[4px] xsm:max-sm:!text-[1.4rem] xsm:max-sm:leading-none xsm:max-sm:!mt-[4px] leading-none !mb-0">
                              Adsiyo</h6>
                           <p class="p-sm mt-[5px] !mb-0 md:max-lg:!text-[1.0625rem] md:max-lg:!mt-0 sm:max-md:!text-[1.0625rem] sm:max-md:!mt-1.5 xsm:max-sm:!text-[1.0625rem] xsm:max-sm:!mt-1.5">
                             Pos</p>
                        </div>
                     </a>
                  </div>
                  <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 flex-[0_0_auto] w-full max-w-full px-[calc(0.5*_1.5rem)]">
                     <a href="#" class="in_tool !flex relative items-stretch justify-start border px-[20px] py-[22px] border-solid border-[#ccc] hover:shadow-[0_4px_12px_0_rgba(0,0,0,0.08)] hover:border-transparent [flex-flow:row_wrap] lg:max-xl:px-[20px] lg:max-xl:py-4 md:max-lg:!p-[16px] sm:max-md:!p-[25px] xsm:max-sm:px-[25px] xsm:max-sm:py-[20px] it-1 rounded-[12px] mb--30 xl:!mb-[30px] wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <!-- Icon -->
                        <div class="in_tool-logo-wrap">
                           <div class="in_tool-logo ico-60 relative mr-[20px]">
                              <img class="" width="160" src="images/integrations/parasut.png" alt="brand-logo">
                           </div>
                        </div>
                        <!-- Text -->
                        <div class="in_tool-txt overflow-hidden flex-1 max-w-full">
                           <h6 class="s-20 w--200 xl:!text-[1.25rem] lg:max-xl:!text-[1.18755rem] md:max-lg:!text-[1.397058rem] md:max-lg:!leading-[1.3] !font-bold font-Jakarta mt-[5px] md:max-lg:!mt-[2px] sm:max-md:!text-[1.4rem] sm:max-md:!leading-none sm:max-md:!mt-[4px] xsm:max-sm:!text-[1.4rem] xsm:max-sm:leading-none xsm:max-sm:!mt-[4px] leading-none !mb-0">
                              Paraşüt</h6>
                           <p class="p-sm mt-[5px] !mb-0 md:max-lg:!text-[1.0625rem] md:max-lg:!mt-0 sm:max-md:!text-[1.0625rem] sm:max-md:!mt-1.5 xsm:max-sm:!text-[1.0625rem] xsm:max-sm:!mt-1.5">
                             {{ __('words.accounting') }}</p>
                        </div>
                     </a>
                  </div>
                   <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 flex-[0_0_auto] w-full max-w-full px-[calc(0.5*_1.5rem)]">
                     <a href="#" class="in_tool !flex relative items-stretch justify-start border px-[20px] py-[22px] border-solid border-[#ccc] hover:shadow-[0_4px_12px_0_rgba(0,0,0,0.08)] hover:border-transparent [flex-flow:row_wrap] lg:max-xl:px-[20px] lg:max-xl:py-4 md:max-lg:!p-[16px] sm:max-md:!p-[25px] xsm:max-sm:px-[25px] xsm:max-sm:py-[20px] it-1 rounded-[12px] mb--30 xl:!mb-[30px] wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <!-- Icon -->
                        <div class="in_tool-logo-wrap">
                           <div class="in_tool-logo ico-60 relative mr-[20px]">
                              <img class="" width="160" src="images/integrations/logo-is-basi.webp" alt="brand-logo">
                           </div>
                        </div>
                        <!-- Text -->
                        <div class="in_tool-txt overflow-hidden flex-1 max-w-full">
                           <h6 class="s-20 w--200 xl:!text-[1.25rem] lg:max-xl:!text-[1.18755rem] md:max-lg:!text-[1.397058rem] md:max-lg:!leading-[1.3] !font-bold font-Jakarta mt-[5px] md:max-lg:!mt-[2px] sm:max-md:!text-[1.4rem] sm:max-md:!leading-none sm:max-md:!mt-[4px] xsm:max-sm:!text-[1.4rem] xsm:max-sm:leading-none xsm:max-sm:!mt-[4px] leading-none !mb-0">
                              Logo İşBaşı</h6>
                           <p class="p-sm mt-[5px] !mb-0 md:max-lg:!text-[1.0625rem] md:max-lg:!mt-0 sm:max-md:!text-[1.0625rem] sm:max-md:!mt-1.5 xsm:max-sm:!text-[1.0625rem] xsm:max-sm:!mt-1.5">
                             {{ __('words.accounting') }}</p>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            <!-- END INTEGRATIONS-1 WRAPPER -->
         </div>
         <!-- End container -->
      </section>
      
@endsection
