
@extends('layouts.app')
<style>

    @media (max-width: 767px) {
        .mapframe{
            width: 100%;
            height: 40%;
        }
    }
    @media (min-width: 767px) {
        .mapframe{
            width: 100%;
            height: 100%;
        }
    }
</style>
@section('content')
    <!--
    <div class="header-title white" data-parallax="scroll" data-position="top" data-natural-height="650" data-natural-width="1920" data-image-src="{{ asset('assets/images/bg-10.png') }}" style="height: 201px;">
        <div class="container">
            <div class="title-base">
                <hr class="anima" />
                <h1>{{__('words.contact')}}</h1>
                <p>{{__('words.contactinformation')}}</p>
            </div>
        </div>
    </div>--->
    <div class="section-two-blocks" style="height: 571px;">
        <div class="row" style="min-height: 1200px;">
            <div class="col-md-6">
                <iframe class="mapframe" src="{{ $contacts->map }}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <div class="title-base text-left text-left-sm">
                        <hr>
                        <h2>{{__('words.contact')}}</h2>
                        <p></p>
                    </div>
                    <p>
                        {{__('words.contactinformation')}}
                    </p>
                    <hr class="space s">
                    <ul class="fa-ul">
                        <li><i class="fa-li im-home-5"></i> FEVZİ ÇAKMAK MH. VALİDESUYU CD.NO.12 <br> KÜÇÜKKÖY-GAZİOSMANPAŞA - İSTANBUL</li>
                        <li><i class="fa-li im-headset"></i> +90 212 475 92 41-44</li>
                        <li><i class="fa-li im-envelope"></i> export@netplas.com | satis@netplas.com</li>
                        <li><i class="fa-li im-envelope"></i> netplas@netplas.com | marketing@netplas.com </li>

                    </ul>
                    <hr class="space s">
                    <form action="" method="post">
                        <div class="row">

                            <div class="col-md-4">
                                <input id="name" name="name" placeholder="{{ __('words.yourname') }}" type="text" class="form-control form-value" required="">
                            </div>
                            <div class="col-md-4">
                                <input id="email" name="email" placeholder="{{ __('words.yourmail') }}" type="email" class="form-control form-value" required="">
                            </div>
                            <div class="col-md-4">
                                <input id="phone" name="phone" placeholder="{{ __('words.yourphonenumber') }}" type="text" class="form-control form-value">
                            </div>
                        </div>
                        <hr class="space xs">
                        <div class="row">
                            <div class="col-md-12">
                                <textarea id="messagge" name="messagge" placeholder="{{ __('words.yourmessage') }}" class="form-control form-value" required=""></textarea>
                                <hr class="space s">

                                <a class="anima-button btn-sm btn" type="submit" id="sendbutton" onclick="sendForm()"><i class="im-mail-send"></i>{{ __('words.submit') }}</a>
                                <div id="loaderanimate" style="display:none">
                                <img src="{{ asset('assets/images/loader.gif')}}"   alt="loading" width="16" height="16">
                                    {{__('words.lutfenbekleyiniz')}}
                                </div>
                                <div class="error-box" id="loaderalert" style="display:none">
                                    <div class="alert alert-warning">{{__('words.validate')}}</div>
                                </div>
                                </div>
                        </div>
                        <div class="success-box" id="successdiv" style="display:none">
                            <div class="alert alert-success">{{__('words.okdiv')}}</div>
                        </div>
                        <div class="error-box" style="display:none">
                            <div class="alert alert-warning">{{__('words.errordiv')}}</div>
                        </div>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>

                    </form>
                </div>
            </div>
        </div>
    </div>


<!-- END PAGE BANNER AND BREADCRUMBS -->
  <script>
  function sendForm(){

      var csrf      = $('meta[name="csrf_token"]').attr('content');
      var name      = $('input[name="name"]').val();
      var email     = $('input[name="email"]').val();
      var phone     = $('input[name="phone"]').val();
      var message   = $('textarea[name="messagge"]').val();
      if(csrf == '' || name=='' || email=='' || phone== '' || message == ''){
          $('#loaderalert').show();
          setTimeout(function(){  $('#loaderalert').hide(); },2000);
      }else{
          $('#loaderanimate').show();
          $('#sendbutton').hide();
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
              }
          });
          $.ajax({
              type: "POST",
              url: '{{ url('contact/sendForm') }}',
              data: {name: name,email:email,phone:phone,message:message},
              success: function( response ) {
                  console.log(response);
                  $('#loaderanimate').hide();
                  $('#successdiv').show();

              }
          });
      }

    }

  </script>
    @endsection
