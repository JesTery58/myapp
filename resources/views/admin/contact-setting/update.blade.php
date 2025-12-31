@extends('admin/layouts.app')
@section('content')
<!-- Main content-->
<form method="post" action="{{ url('admin/contact-setting/update/'.$id.'')}}" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="row">
    <div class="col-lg-12">
        <div class="view-header">
            <div class="pull-right text-right" style="line-height: 14px;margin-top: 9px;">

                <a href="{{ url('admin/contact-setting') }}" class="btn" ><i class="fa fa-arrow-left"></i> Geri</a>
                <button type="submit" name="submit" value="1" class="btn w-xs btn-success"><i class="fa fa-refresh"></i> Güncelle</button>

            </div>
            <div class="header-icon">
                <i class="pe page-header-icon pe-7s-config"></i>
            </div>
            <div class="header-title">
                <h3 class="font-light m-b-xs">
                    İletişim Ekle
                </h3>
                <small>Yeni İletişim Bilgilerini Ekleyebilirsiniz</small>
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
        <div class="hpanel panel-collapse">
            <div class="panel-body" style="display: block;">
                <div class="hpanel">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> <i class="fa fa-laptop"></i></a></li>
                        @foreach($languages as $language)
                            <li class=""><a data-toggle="tab" href="#tab-{{ $language->code }}" aria-expanded="false">{{ $language->name}}</a></li>
                        @endforeach

                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">

                            <div class="panel-body">
                                <div class="form-group"><label class="col-sm-2 control-label">Adres</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="address" value="{{ $contact_settings->address }}" class="form-control" ></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Telefon</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="phone" value="{{ $contact_settings->phone }}" class="form-control" ></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Fax</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="phone_2" value="{{ $contact_settings->phone_2 }}" class="form-control" ></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Mobil</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="phone_3" value="{{ $contact_settings->phone_3 }}" class="form-control" ></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Mail Adresi</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="mail" value="{{ $contact_settings->mail }}" class="form-control" ></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Mail Adresi 2</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="mail_2" value="{{ $contact_settings->mail_2 }}" class="form-control" ></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Google Map Harita Kodu</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span>
                                            <textarea type="text" rows="5" name="map" value="" class="form-control2" >{{ $contact_settings->map }}</textarea>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>

                        @foreach($languages as $language)
                            <div id="tab-{{ $language->code }}" class="tab-pane">
                                <div class="panel-body">
                                    <div class="form-group"><label class="col-sm-2 control-label">Başlık</label>
                                        <div class="col-sm-10">
                                            <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="name[{{ $language->code }}]" value=" {{ unserialize($contact_settings->name)[$language->code]  ?? '' }}" class="form-control" ></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                            </post>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</form>

@endsection
<script>
    function sunucuyaGozat(url, name) {
        console.log(name);
        window.value = '#'+name;
        var width   = '1000';
        var height  = '450';
        var left = (screen.width/2)-(width/2);
        var top = (screen.height/2)-(height/2);
        return window.open(url,'Dosya Yoneticisi','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+width+', height='+height+', top='+top+', left='+left);
    }
    function processFile(file){
        var file = file.slice(1, 50);
        $(window.value).html('<img src="{{ asset("") }}'+file+'"  width="200"/>');
        $(window.value+'a').val(file);
    }
</script>
@push('script')

@endpush