@extends('layouts.app')
<style>
@media (max-width: 767px){
   .cepcep {
    display: none;
}

}

</style>
@section('content')
    <div class="header-base  white  bg-cover" style="background-image: url({{ asset('assets/images/bg-10.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="title-base text-left">
                        <h1>{{ __('words.arama')}}</h1>
                        <p>
                        <ol class="breadcrumb b " style="float: left;">
                            <li><a href="">{{__('words.allproducts')}}</a></li>
                        </ol>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 cepcep">
                    <ol class="breadcrumb b ">
                    <li><a href="{{ url('/') }}">{{__('words.arama')}}</a></li>
                    <li class="active">{{__('words.allproducts')}}</li>
                    </ol>            
                
                </div>
            </div>
        </div>
    </div>
    <!---vberberberb-->
    <div id="section_5ZtkF" class="section-item section-empty    " style="">
        <div class="content container " style="">
            <div class="row ">
                <div id="column_QQVeG" class="hc_column_cnt col-md-12   " style="">
                    <div class="row">
                        <div class="col-md-12 hc_grid_list_cnt">
                            <form method="get" action="{{url('search')}}">
                                <div class="">
                                    <input type="text" class="form-control" name="p" placeholder="{{__('words.typetext')}}" value="{{ $searchTerm }}">
                                </div>

                            </form>
                            <h5><b>{{ $count }}</b> {{ __('words.resultsfound') }} ({{ __('words.searchitem') }} <b>"{{ $searchTerm }}"</b>)</h5>
                            <div class="grid-list    " style="">
                                <div class="grid-box row" style="margin: -10px; width: calc(100% + 20px);">

                                    @foreach( $results  as $productCategorys)
                                        <?php
                                        foreach (explode(',',$productCategorys->image) as $aa) {
                                        }
                                        ?>
                                        <div class="grid-item col-md-2  " style="padding: 10px; display: block;">
                                            <div class="advs-box advs-box-multiple"  style="border: 1px solid #dcdcdc;border-radius: 5px;">
                                                <a  class="lightbox  " href="#column_dZjnQ" id="{{ $productCategorys->id }}" onclick="deneme(this.id)" style="min-height: 400px;

                                            border-bottom: none;
                                            border-top-left-radius: 6px;
                                            border-top-right-radius: 6px;">
                                                    <div style="min-height: 160px;padding: 2px">

                                                        <img class="olcu2"  src="{{ $aa }}"  style="width: 300px;height: 150px;object-fit: contain">
                                                        </div>

                                                </a>

                                                <div class="advs-box-content" style="padding: 5px;background: #fbfbfb;">
                                                    <h3 style="margin-top:10px;font-size: 20px;padding-right: 0px; text-align: center;color: #73c368;line-height: 2px;text-transform: uppercase">
                                                        {{  $productCategorys->code }}</h3>
                                                    <p style="text-align: center;min-height: 60px;line-height: 18px" >{{ unserialize( $productCategorys->caption)[$lang] ?? "" }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="column_dZjnQ" class="box-lightbox m olcu3" style="padding:25px">
            <div class="scroll-content scroll-mobile-disabled" data-height=".box-lightbox">
                <div class="row vertical-row">
                    <div class="col-md-6 col-sm-12 fade-left" data-anima="" style="position: relative; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;" aid="0.9996004267456278">
                        <div class="row">
                            <div class="col-md-12">

                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="min-height: 300px">
                                    <div class="carousel-inner" id="images" >
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <b style="font-size: 30px;color: #44444438"><</b>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <b style="font-size: 30px;color: #44444438">></b>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <!----
                                <div class="flexslider slider white">
                                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                        <ul class="slides" id="images"style="width: 1000%; transition-duration: 0s; transform: translate3d(-1079px, 0px, 0px);">
                                            <li class="clone" aria-hidden="true" style="width: 350px; float: left; display: block;">
                                                <a class="img-box lightbox thumbnail inner" href="{{ asset('assets/images/bos.png') }}" data-lightbox-anima="show-scale">
                                            <span>
                                                <img alt="" src="{{ asset('assets/images/bos.png') }}" draggable="false">
                                            </span>
                                                </a>
                                            </li><li class="clone" aria-hidden="true" style="width: 350px; float: left; display: block;">
                                                <a class="img-box lightbox thumbnail inner" href="{{ asset('assets/images/bos.png') }}" data-lightbox-anima="show-scale">
                                            <span>
                                                <img alt="" src="{{ asset('assets/images/bos.png') }}" draggable="false">
                                            </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                ---->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center-sm fade-right" data-anima="" style="height:100%;position: relative; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;" aid="0.8088658699917282">
                        <h4 id="code"></h4>
                        <span id="name"></span>
                        <hr>
                        <p id="subname">

                        </p>
                        <!---
                        <ul class="fa-ul text-s text-center-sm" style="margin-top: 108px;">
                            <li><i class="fa-li im-folder-link"></i>Sipariş Formuna Eklemek İçin</li>

                        </ul>
                        <hr class="space s" >
                        <input name="adet" placeholder="Miktar Giriniz">
                        <select style="padding: 4px;">
                            <option>Metre</option>
                            <option>Adet</option>
                        </select>
                        <a href="#" class="btn btn-sm" style="margin-bottom: 4px;">Ekle</a>--->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')

    <script>
        function deneme(id){
            //alert(id);
            //$('#code').val(id);
            //document.getElementById('code').innerHTML=id;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ url('product/detay/'.$lang.'') }}",
                data: { id: id},
                success: function (msg) {
                    $('#code').html(msg.code);
                    $('#images').html('');
                    $('#name').html(msg.name);
                    $('#subname').html(msg.subname);
                    var url='{{ asset('') }}';
                    var myarr = msg.images.split(",")
                    for(var i=0 ; i < myarr.length ; i++){
                        var res= myarr[i];
                        if(res == ''){
                            var imageurl= '{{ asset('assets/images/bos.png') }}';;
                        }else{
                            var imageurl= url+ res;
                        }
                        if(i == 1){
                            var deger = 'active';
                        }else{
                            var deger ='ssss';
                        }
                        $('#images').append(
                            ' <div class="carousel-item '+deger+'">'+
                            '<img class="d-block w-100" src="'+imageurl +'" width="500px">'+
                            '</div>'
                        );
                    }
                }
            });
        }
    </script>
@endpush