@extends('admin/layouts.app')
@section('content')
<!-- Main content-->



<!-- Main content-->
<form method="post" action="{{ url('admin/pages/update/'.$id.'')}}" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="row">
        <div class="col-lg-12">
            <div class="view-header">
                <div class="pull-right text-right" style="line-height: 14px;margin-top: 9px;">

                    <a href="{{ url('admin/pages') }}" class="btn" ><i class="fa fa-arrow-left"></i> Geri</a>
                    <button type="submit" name="submit" value="1" class="btn w-xs btn-success"><i class="fa fa-refresh"></i> Güncelle</button>

                </div>
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-config"></i>
                </div>
                <div class="header-title">
                    <h3 class="font-light m-b-xs">
                        Sayfa Güncelle
                    </h3>
                    <small>Sayfa Bilgilerini Buradan Güncelleyebilirsiniz</small>
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
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> <i class="fa fa-laptop"></i></a></li>
                    @foreach($languages as $language)
                        <li class=""><a data-toggle="tab" href="#tab-{{ $language->code }}" aria-expanded="false">{{ $language->name}}</a></li>
                    @endforeach

                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">

                        <div class="panel-body">
                            <div class="form-group"><label class="col-sm-2 control-label">Sıra Numarası</label>
                                <div class="col-sm-10">
                                    <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="orders" value="{{ $page->orders }}" class="form-control" ></div>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Durum</label>
                                <div class="col-sm-10">
                                    <div class="input-group m-b"><span class="input-group-addon"></span>
                                        <select type="text" name="status"  class="form-control" >
                                            <option value="1" @if( $page->status == 1) selected @endif >Aktif</option>
                                            <option value="0" @if( $page->status == 0) selected @endif>Pasif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Modul</label>
                                <div class="col-sm-10">
                                    <div class="input-group m-b"><span class="input-group-addon"></span>
                                        <select type="text" name="modul"  class="form-control" >
                                            <option value="0" >Modul Yok</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label">Blog Resmi</label>
                                <div class="col-sm-10">
                                    <a onclick="sunucuyaGozat('{{ url('/admin/file-directory')}}', 101)" href="javascript:void(0);">
                                        <div id="101"><img src="{{ $page->image }}" width="200" onerror="this.src='{{ url('public/img/yukle.png') }}"></div>
                                        <input type="hidden" id="101a" placeholder="Resim Ekle" name="image" 	value="{{ $page->image}}" />
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                    @foreach($languages as $language)
                        <div id="tab-{{ $language->code }}" class="tab-pane">
                            <div class="panel-body">
                                <div class="form-group"><label class="col-sm-2 control-label">Başlık</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="caption[{{ $language->code }}]" value="{{isset( unserialize($page->caption)[$language->code])?  unserialize($page->caption)[$language->code] : '' }}" class="form-control" ></div>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Başlık Alt Yazısı</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="caption_two[{{ $language->code }}]" value="{{ isset(unserialize($page->caption_two)[$language->code])?unserialize($page->caption_two)[$language->code]:'' }}" class="form-control" ></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">İçerik</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span>
                                            <textarea type="text" name="comment[{{ $language->code }}]" value="" class="form-control textarea"  rows="10">{{ isset(unserialize($page->comment)[$language->code] )? unserialize($page->comment)[$language->code]  :''}}</textarea></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="title[{{ $language->code }}]" value="{{ isset(unserialize($page->title)[$language->code])?unserialize($page->title)[$language->code]:'' }}" class="form-control" ></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="description[{{ $language->code }}]" value="{{ isset(unserialize($page->description)[$language->code])? unserialize($page->description)[$language->code] :'' }}" class="form-control" ></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Keywords</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="keywords[{{ $language->code }}]" value="{{ isset(unserialize($page->keywords)[$language->code])?unserialize($page->keywords)[$language->code] : '' }}" class="form-control" ></div>
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