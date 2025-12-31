@extends('layouts.app')

@section('content')
   @foreach ($results as $product)
   @endforeach
   <!-- START PAGE BANNER AND BREADCRUMBS -->
   <section class="single-page-title-area" data-background="{{ asset('assets/img/bg/heading.png') }}">
      <div class="auto-container">
         <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
               <div class="single-page-title">
                  <h2>{{unserialize($product->caption)[$lang]}}</h2>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('/') }}"><span class="lnr lnr-home"></span></a></li>
                  <li class="breadcrumb-item">{{__('words.products')}}</li>
                  <li class="breadcrumb-item active">{{unserialize($product->caption)[$lang]}}</li>
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
                                       {{ unserialize($category->name)[$lang] }}
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
               <div class="row">
                  <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                     <div class="row">
                        <div class="col-lg-12 mb-lg-0 mb-md-3 mb-sm-3 mb-3">
                           <div class="row">
                              <div class="col-lg-3 col-md-3 c0l-sm-12 col-xs-12 pr-lg-3 pr-md-3 pr-sm-0 pr-0">
                                 <ul id="tabsJustified" class="nav nav-tabs text-center">
                                     <?php $b=1; ?>
                                    @foreach(explode(',' , $product->image ) as $images)

                                       <li class="nav-item">
                                          <a href="#" data-target="#{{ $b }}" data-toggle="tab" class="nav-link" aria-expanded="false">
                                             <img class="img-fluid" src="{{ $images }}" alt="">
                                          </a>
                                       </li>
                                         <?php $b++; ?>
                                    @endforeach

                                 </ul>
                              </div>
                              <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 pr-0 mb-2">
                                 <div id="tabsJustifiedContent" class="tab-content">
                                     <?php $i=1; ?>
                                    @foreach(explode(',' , $product->image ) as $images)

                                    <div id="{{ $i }}" class="tab-pane animated fadeInRight @if($i==1) active @endif" aria-expanded="false">
                                       <img class="img-fluid" src="{{ $images }}" alt="">
                                    </div>
                                             <?php $i++; ?>
                                    @endforeach

                                 </div>
                              </div>

                           </div>
                           <div style="width:100%;padding: 5px 5px">

                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="doctor-schedule">
                              <h5>{{ $product->code }}</h5>
                              <h4 style="font-weight: 300;">{{unserialize($product->caption)[$lang]}}</h4>
                              <h6 style="font-weight: 200;">{{unserialize($product->caption_two)[$lang]}}</h6>

                              <hr>

                           </div>
                        </div>
                     </div>
                     <div class="row mt-5">
                        <div class="single-doc-tab col-lg-12">
                           <ul id="tabsJustified" class="nav nav-tabs justify-content-left">
                              <li class="nav-item">
                                 <a href="#" data-target="#one" data-toggle="tab" class="nav-link active" aria-expanded="true">
                                  {{__('words.comments')}}
                                 </a>
                              </li>
                              <!--
                              <li class="nav-item">
                                 <a href="#" data-target="#two" data-toggle="tab" class="nav-link" aria-expanded="false">
                                    {{__('words.similarproducts')}}
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="#" data-target="#three" data-toggle="tab" class="nav-link " aria-expanded="false">
                                    {{__('words.requestaprice')}}
                                 </a>
                              </li>-->
                           </ul>
                           <div id="tabsJustifiedContent" class="tab-content mt-4">
                              <div id="one" class="tab-pane animated fadeInRight active" aria-expanded="false">
                                 {{unserialize($product->comment)[$lang]}}
                              </div>
                              <div id="two" class="tab-pane animated fadeInRight" aria-expanded="false">
                                 <ul>

                                       <div class="single-image mt-5">
                                          @foreach($Similarproducts as $Similarproduct)
                                          <div class="single-image-gallery-img">
                                             @foreach(explode(',' , $Similarproduct->image ) as $simages)
                                                @if ($loop->first)
                                                   <a href="{{ url('product/'. $Similarproduct->seo_url .'') }}" class="" >
                                             <img class="" src="{{  $simages }}" alt="">


                                             </a>
                                                   <h5 style="font-size:10px">{{ $product->code }}</h5>
                                                   <h4 style="font-size:10px;font-weight: 300;">{{unserialize($product->caption)[$lang]}}</h4>
                                                @endif
                                             @endforeach
                                          </div>
                                          @endforeach
                                       </div>


                                 </ul>
                              </div>
                              <div id="three" class="tab-pane animated fadeInRight " aria-expanded="true">

                                    <div class="sidebar-widget">

                                       <!-- end widget tittle-->
                                       <div class="appointment-form">
                                          <form action="#">
                                             <div class="row">
                                                <div class="form-group col-lg-12">
                                                   <input name="aname" class="form-control" id="afirst-name" placeholder="{{__('words.yourname')}}" required="required" type="text">
                                                </div>
                                                <div class="form-group col-lg-12">
                                                   <input name="aemail" class="form-control" id="aemail" placeholder="{{__('words.yourmail')}}" required="required" type="email">
                                                </div>
                                                <div class="form-group col-lg-12">
                                                   <input name="aphone" class="form-control" id="aphone" placeholder="{{__('words.yourphonenumber')}}" required="required" type="text">
                                                </div>

                                                <div class="form-group col-lg-12">
                                                   <textarea rows="6" name="rmessage" class="form-control" id="adescription" placeholder="{{__('words.yourmessage')}}" required="required"></textarea>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                   <a title="Click here to submit your message!" class="btn btn-lg btn-app-form">{{__('words.submit')}}</a>
                                                </div>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                    <!-- end widget -->

                              </div>
                           </div>
                        </div>
                     </div>


                  </div>

               </div>

            </div>

         </div>
      </div>
      <!--- END CONTAINER -->
   </section>
   <!-- END SERVICE SECTION -->

@endsection
