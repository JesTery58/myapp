@extends('admin/layouts.app')
@section('content')
<!-- Main content-->
<form method="post" action="{{ url('admin/web-setting')}}" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="row">
    <div class="col-lg-12">
        <div class="view-header">
            <div class="pull-right text-right" style="line-height: 14px;margin-top: 9px;">

                <button type="submit" name="submit" value="1" class="btn btn-accent" ><i class="fa fa-refresh"></i> Güncelle</button>

            </div>
            <div class="header-icon">
                <i class="pe page-header-icon pe-7s-config"></i>
            </div>
            <div class="header-title">
                <h3>
                    Web Sitesi Ayarları
                </h3>
                <small>Web Sitesinizin Başlangıç Bilgilerini Buradan Düzenleyebilirsiniz.</small>
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
                        @foreach($main_settings as $main_setting)
                        @endforeach
                        <div id="tab-1" class="tab-pane active">

                            <div class="panel-body">
                                <div class="form-group"><label class="col-sm-2 control-label">Firma Adı</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="company1" value="{{ $main_setting->company1}}" class="form-control" ></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Firma Ünvanı</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="company2" value="{{ $main_setting->company2}}" class="form-control" ></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Web Sitesi</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="website" value="{{ $main_setting->website}}" class="form-control" ></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Head Script Kodu</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="headerscript" value="{{ $main_setting->headerscript}}" class="form-control" placeholder="<script></script>" ></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Logo</label>
                                    <div class="col-sm-10">
                                        <a onclick="sunucuyaGozat('{{ url('/admin/file-directory')}}' , 100)" href="javascript:void(0);">
                                            <div id="100"><img src="{{ asset(''.$main_setting->logo.'') }}" height="50"></div>
                                            <input type="hidden" id="100a" placeholder="Resim Ekle" name="logo" 	value="{{ $main_setting->logo}}"  />
                                        </a>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Favicon</label>
                                    <div class="col-sm-10">
                                        <a onclick="sunucuyaGozat('{{ url('/admin/file-directory')}}', 101)" href="javascript:void(0);">
                                            <div id="101"><img src="{{ asset(''.$main_setting->favicon.'') }}" height="16"></div>
                                            <input type="hidden" id="101a" placeholder="Resim Ekle" name="favicon" 	value="{{ $main_setting->favicon}}" />
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        @foreach($languages as $language)
                            <div id="tab-{{ $language->code }}" class="tab-pane">
                                <div class="panel-body">
                                    <div class="form-group"><label class="col-sm-2 control-label">Header Yazısı</label>
                                        <div class="col-sm-10">
                                            <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="header[{{ $language->code }}]" value="{{ unserialize($main_setting->header)[$language->code] ?? ''}}" class="form-control" ></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Footer Yazısı</label>
                                        <div class="col-sm-10">
                                            <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="footer[{{ $language->code }}]" value="{{ unserialize($main_setting->footer)[$language->code] ?? ''}}" class="form-control" ></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Title(Sayfa Başlığı)</label>
                                        <div class="col-sm-10">
                                            <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="title[{{ $language->code }}]" value="{{ unserialize($main_setting->title)[$language->code] ?? ''}}" class="form-control" ></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Description (Sayfa Açıklaması)</label>
                                        <div class="col-sm-10">
                                            <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="description[{{ $language->code }}]" value="{{ unserialize($main_setting->description)[$language->code] ?? ''}}" class="form-control" ></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Keywords (Anahtar Kelimeler)</label>
                                        <div class="col-sm-10">
                                            <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="keywords[{{ $language->code }}]" value="{{ unserialize($main_setting->keywords)[$language->code] ?? ''}}" class="form-control" ></div>
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