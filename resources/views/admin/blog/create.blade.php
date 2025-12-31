@extends('admin/layouts.app')
@section('content')
    <!-- Main content-->



    <!-- Main content-->
    <form method="post" action="{{ url('admin/blog/create')}}" role="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="row">
            <div class="col-lg-12">
                <div class="view-header">
                    <div class="pull-right text-right" style="line-height: 14px;margin-top: 9px;">

                        <a href="{{ url('admin/blog') }}" class="btn" ><i class="fa fa-arrow-left"></i> Geri</a>
                        <button type="submit" name="submit" value="1" class="btn w-xs btn-success"><i class="fa fa-save"></i> Kaydet</button>

                    </div>
                    <div class="header-icon">
                        <i class="pe page-header-icon pe-7s-config"></i>
                    </div>
                    <div class="header-title">
                        <h3 class="font-light m-b-xs">
                            Blog Ekle
                        </h3>
                        <small>Blog Yazılarını Buradan Ekleyebilirsiniz</small>
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
                              <div class="form-group"><label class="col-sm-2 control-label">Ürün Kategorisi</label>
                                  <div class="col-sm-10">
                                      <ul style="list-style-type: none">
                                          @foreach ($blogcategories as $category)
                                              <li>
                                                  <div style="float: left">
                                                      <input type="checkbox" name="parent_id" value="{{ $category->id }}"  class="" >
                                                  </div>
                                                  <div style="margin-left: 20px;">{{ unserialize($category->name)['tr'] }} </div>
                                                  @if($category->children ->isNotEmpty())
                                                      @include ('/admin/category/seo_url_sub_list_check' , [ 'children' => $category->children , 'control_id'=> ""])
                                                  @endif
                                              </li>
                                          @endforeach
                                      </ul>

                                  </div>
                              </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Sıra Numarası</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="orders" value="" class="form-control" ></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Durum</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span>
                                            <select type="text" name="status"  class="form-control" >
                                                <option value="1" >Aktif</option>
                                                <option value="0" >Pasif</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Blog Resmi</label>
                                    <div class="col-sm-10">
                                        <a onclick="sunucuyaGozat('{{ url('/admin/file-directory')}}', 101)" href="javascript:void(0);">
                                            <div id="101"><img src="" width="20" onerror="this.src='{{ asset('assets/images/yukle.png') }}"></div>
                                            <input type="hidden" id="101a" placeholder="Resim Ekle" name="image" value="" />
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
                                            <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="caption[{{ $language->code }}]" value="" class="form-control" ></div>
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">Başlık Alt Yazısı</label>
                                        <div class="col-sm-10">
                                            <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="caption_two[{{ $language->code }}]" value="" class="form-control" ></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">İçerik</label>
                                        <div class="col-sm-10">
                                            <div class="input-group m-b"><span class="input-group-addon"></span>
                                                <textarea type="text" name="conment[{{ $language->code }}]" value="" class="form-control"  rows="10"></textarea></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Title</label>
                                        <div class="col-sm-10">
                                            <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="title[{{ $language->code }}]" value="" class="form-control" ></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Description</label>
                                        <div class="col-sm-10">
                                            <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="description[{{ $language->code }}]" value="" class="form-control" ></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Keywords</label>
                                        <div class="col-sm-10">
                                            <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="keywords[{{ $language->code }}]" value="" class="form-control" ></div>
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