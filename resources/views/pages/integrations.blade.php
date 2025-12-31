  
@extends('layouts.app')

@section('content')
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
                        Ligula risus auctor tempus magna feugiat lacinia.</p>
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
               </div>
            </div>
            <!-- END INTEGRATIONS-1 WRAPPER -->
         </div>
         <!-- End container -->
      </section>
    
          @endsection