@extends('admin/layouts.app')
@section('content')
<!-- Main content-->



<!-- Main content-->



    <div class="row">
        <div class="col-lg-12">
            <div class="view-header">
                <div class="pull-right text-right" style="line-height: 14px;margin-top: 9px;">

                    <a href="{{ url('admin/messages/'.$type.'') }}" class="btn" ><i class="fa fa-arrow-left"></i> Geri</a>
                    <div class="btn-group">
                        <button class="btn w-xs btn-success"><i class="fa fa-reply"></i> Yanıtla</button>
                        <a href="{{ url('admin/messages/reply/'.$type.'/'.$id.'') }}" class="btn w-xs btn-success"><i class="fa fa-arrow-right"></i> İlet</a>
                        <button class="btn w-xs btn-success"  onclick="printDiv('printablediv')"><i class="fa fa-print"></i> Yazdır</button>
                    </div>

                </div>
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-config"></i>
                </div>
                <div class="header-title">
                    <h3 class="font-light m-b-xs">
                        Mesaj Ayrıntıları
                    </h3>
                    <small>Mesaj İçeriğini Görüntüleyebilir ve Cevap Yazabilirsiniz</small>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="col-md-12" id="printablediv">
                    <div class="hpanel email-compose">
                        <div class="panel-heading hbuilt">

                            <div class="p-xs h4">
                                <small class="pull-right">
                                    {{ $messages->created_at }} ( {{  $messages->created_at->diffForHumans() }})
                                </small>
                                Mesaj Ayrıntıları

                            </div>
                        </div>
                        <div class="border-top border-left border-right bg-light">

                            <div class="p-m">

                                <div>
                                    <span class="font-extra-bold" style="min-width: 150px;">Adı Soyadı: </span>
                                    {{ $messages->name }}  {{ $messages->surname }}
                                </div>
                                <div>
                                    <span class="font-extra-bold">Mail Adresi: </span>
                                    <a href="#">{{ $messages->email }}</a>
                                </div>
                                <div>
                                    <span class="font-extra-bold">Telefon: </span>
                                    {{ $messages->phone }}
                                </div>
                                <div>
                                    <span class="font-extra-bold">Date: </span>
                                    {{ $messages->created_at->formatLocalized('%A %d %B %Y') }}
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div style="min-height: 300px">
                                {{ $messages->message }}
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>


<script>
    function printDiv(divID) {
        //Get the HTML of div
        var divElements = document.getElementById(divID).innerHTML;
        //Get the HTML of whole page
        var oldPage = document.body.innerHTML;
        //Reset the page's HTML with div's HTML only
        document.body.innerHTML =
            "<html><head><title></title></head><body style='width:100%'>" +
            divElements + "</body>";
        //Print Page
        window.print();
        //Restore orignal HTML
        document.body.innerHTML = oldPage;

    }


</script>

@endsection
