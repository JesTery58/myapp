@extends('layouts.app')

@section('content')
   <!-- START PAGE BANNER AND BREADCRUMBS -->
   <section class="single-page-title-area" data-background="{{ asset('assets/img/bg/heading.png') }}">
      <div class="auto-container">
         <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
               <div class="single-page-title">
                  <h2>{{ isset(unserialize($title)[$lang]) ? unserialize($title)[$lang] : ''}}</h2>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('/') }}"><span class="lnr lnr-home"></span></a></li>
                  <li class="breadcrumb-item">{{__('words.products')}}</li>
               </ol>
            </div>
         </div>
         <!-- end row-->
      </div>
   </section>
   <!-- END PAGE BANNER AND BREADCRUMBS -->

   <!-- START SERVICE SECTION -->
   <section id="service" class="section-padding">
      <div class="auto-container">
         <div class="row">
            <aside class="col-lg-4 col-md-4 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-sm-5 mb-5 pr-lg-5 pr-md-5 pr-sm-0 pr-0">
               <div class="sidebar-widget">
                  <h5 class="widget-title">{{__('words.product_groups') }}</h5>
                  <!-- end widget tittle-->
                  <div class="row">
                     <div class="panel-group faq-home-accor" id="accordion">

                        @foreach ($productCategory as $category)
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <h5 class="panel-title">
                                 <i class="icofont icofont-thin-down"></i>
                                 <a class="accordion-toggle" @if($category->children->isNotEmpty()) data-toggle="collapse" data-parent="#accordion" href="#panel{{$category->id }}"@else href="{{ url('product/'.$category->seo_url.'') }}" @endif>
                                    {{ isset(unserialize($category->name)[$lang]) ? unserialize($category->name)[$lang] : '' }}
                                 </a>
                              </h5>
                           </div>
                           <div id="panel{{$category->id}}" class="panel-collapse collapse @if($category->seo_url == $seo_url) show @endif ">
                              <div class="panel-body">
                                 <div class="servide-list">
                                    <ul>
                                       @if($category->children->isNotEmpty())
                                          @include('product/sub_list' ,  [ 'children' => $category->children  ])
                                       @endif
                                    </ul>
                                 </div></div>
                           </div>
                        </div>
                        @endforeach

                     </div>
                  </div>

               </div>
               <!-- end widget -->


               <!-- end widget -->
            </aside>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
              <div class="single-doctor-info" style="background: #006ec7; padding: 5px;margin-bottom: 0px;vertical-align: middle;justify-content: center;">
                 <h4 style="border-left: 4px solid #ffffff;padding: 5px;color: #fff;font-size: 20px;font-weight: 350;">{{ isset(unserialize( $title)[$lang]) ? unserialize( $title)[$lang] : '' }}</h4>
              </div>
               
                   @if($results->isNotEmpty())
                     @foreach( $results  as $productCategorys)


                        <div class="col-md-3" style="width: 24%;float:left;border-left: 4px solid #ffffff; padding: 5px;height: 250px;    border: 2px solid #fbfbfb;padding: 5px;margin-left:5px;"> <a href="{{ url('product/'.$productCategorys->seo_url.'') }}">
                              @foreach(explode(',' , $productCategorys->image ) as $images)
                                 @if ($loop->first)
                                    <img class="img-fluid" src="{{ $images }}" alt="" width="250" />
                                    @endif
                              @endforeach

                              <div class="doctor-info">
                                 <h5 style="font-size: 14px;">{{ $productCategorys->code }}</h5>
                                 <h6 style="font-size: 11px;">{{ isset(unserialize( $productCategorys->caption)[$lang]) ? unserialize( $productCategorys->caption)[$lang] : '' }}</h6>
                                 <h6 style="font-size: 11px;">{{ str_limit(isset(unserialize( $productCategorys->caption_two)[$lang]) ?  unserialize( $productCategorys->caption_two)[$lang]  : '', 20) }}</h6>
                              </div>
                           </a>
                        </div>
                     @endforeach

                   @else
                     <b style="font-size: 14px;font-weight: 300">{{__('words.noitemsfound')}}</b>
                   @endif



            </div>
         </div>
      </div>
      <!--- END CONTAINER -->
   </section>
   <!-- END SERVICE SECTION -->


@endsection
