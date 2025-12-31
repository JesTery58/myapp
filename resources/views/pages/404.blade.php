
@extends('layouts.app')

@section('content')
  

<div class="section-empty section-item">
        <div class="container content box-middle-container full-screen-size" data-sub-height="80" style="height: 545px;">
            <div class="row">
                <div class="col-md-12 text-center box-middle" style="margin-top: 109px;">
                    <div>
                        
                        <hr class="space m">
                        <h1 class="text-xxl">{{ $type }}</h1>
                        <h1>{{__('words.pagenotfound') }}</h1>
                       
                        <hr class="space m">
                        <a class="anima-button btn-sm btn" href="{{ url('/') }} "><i class="im-left"></i>{{__('words.mainpage') }}</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
