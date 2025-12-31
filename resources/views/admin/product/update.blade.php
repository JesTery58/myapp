@extends('admin/layouts.app')
@section('content')
<!-- Main content-->



<!-- Main content-->
<form method="post" action="{{ url('admin/products/update/'.$id.'')}}" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="row">
        <div class="col-lg-12">
            <div class="view-header">
                <div class="pull-right text-right" style="line-height: 14px;margin-top: 9px;">

                    <a href="{{ url('admin/products') }}" class="btn" ><i class="fa fa-arrow-left"></i> Geri</a>
                    <button type="submit" name="submit" value="1" class="btn w-xs btn-success"><i class="fa fa-refresh"></i> Güncelle</button>

                </div>
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-config"></i>
                </div>
                <div class="header-title">
                    <h3 class="font-light m-b-xs">
                        Ürün Güncelle
                    </h3>
                    <small>Ürün Bilgilerini Buradan Güncelleyebilirsiniz</small>
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
                    <li><a data-toggle="tab" href="#tab-image" aria-expanded="true"> <i class="fa fa-image"></i></a></li>

                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">

                        <div class="panel-body">
                            <div class="form-group"><label class="col-sm-2 control-label">Kategori Seo-Url</label>
                                <div class="col-sm-10">
                                    <div class="input-group m-b"><span class="input-group-addon"></span> 
                                        <input type="text" name="category_id2" id ="seosecinput" value="{{ $product->category_id }}" class="form-control" ></div>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Ürün Kategorisi</label>
                                <div class="col-sm-10" style="height: 250px;
                                                overflow: auto;
                                                margin-bottom: 30px;
                                                /* border: 2px solid #fbfbfb; */
                                                background: #ffffff;
                                                padding: 10px;">
                                    <ul style="list-style-type: none;line-height: 12px;">

                                        @foreach ($categories as $category)
                                            <li>
                                                <div style="float: left">
                                                    <input type="checkbox" name="parent_id" id="1" onclick="seosec(this.value)" value="{{ $category->seo_url }}" @if($product->category_id == $category->seo_url)  checked @endif class="" >
                                                </div>
                                                <div style="margin-left: 20px;">{{ unserialize($category->name)['tr'] }} </div>
                                                @if($category->children ->isNotEmpty())
                                                    @include ('/admin/category/sub_list_check' , [ 'children' => $category->children , 'control_id'=> $product->category_id])
                                                @endif
                                            </li>

                                        @endforeach
                                    </ul>

                                </div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label">Ürün Kodu</label>
                                <div class="col-sm-10">
                                    <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="code" value="{{ $product->code }}" class="form-control" ></div>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Ürün Fiyatı</label>
                                <div class="col-sm-10">
                                    <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="price" value="{{ $product->price }}" class="form-control" ></div>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Sıra Numarası</label>
                                <div class="col-sm-10">
                                    <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="orders" value="{{ $product->orders }}" class="form-control" ></div>
                                </div>
                            </div>


                            <div class="form-group"><label class="col-sm-2 control-label">Durum</label>
                                <div class="col-sm-10">
                                    <div class="input-group m-b"><span class="input-group-addon"></span>
                                        <select type="text" name="status"  class="form-control" >
                                            <option value="1" @if( $product->status == 1) selected @endif >Aktif</option>
                                            <option value="0" @if( $product->status == 0) selected @endif>Pasif</option>
                                        </select>
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
                                        <div class="input-group m-b"><span class="input-group-addon"></span>
                                            <input type="text" name="caption[{{ $language->code }}]" value="{{ unserialize($product->caption)[$language->code] ?? '' }}" class="form-control"  required></div>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Başlık Alt Yazısı</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="caption_two[{{ $language->code }}]" value="{{ unserialize($product->caption_two)[$language->code] ?? '' }}" class="form-control" ></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">İçerik</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span>
                                            <textarea type="text" name="comment[{{ $language->code }}]" value="" class="form-control"  rows="10">{{ unserialize($product->comment)[$language->code] ?? '' }}</textarea></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Özellikler</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span>
                                            <textarea type="text" name="features[{{ $language->code }}]" value="" class="form-control"  rows="10">{{ unserialize($product->features)[$language->code] ?? '' }}</textarea></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span>
                                            <input type="text" name="title[{{ $language->code }}]" value="{{ unserialize($product->title)[$language->code] ?? '' }}" class="form-control" ></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span>
                                            <input type="text" name="description[{{ $language->code }}]" value="{{ unserialize($product->description)[$language->code] ?? '' }}" class="form-control" ></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Keywords</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span>
                                            <input type="text" name="keywords[{{ $language->code }}]" value="{{ unserialize($product->keywords)[$language->code] ?? '' }}" class="form-control" ></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                        <div id="tab-image" class="tab-pane">
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="panel-body float-e-margins">

                                        <button class="btn btn-success " type="button" id="clickme"><i class="fa fa-upload"></i> <span class="bold">Resim Ekle</span></button>
                                        <p id="countvalue" style="margin-top: 10px">
                                        </p>
                                    </div>

                                </div>

                                <div class="col-md-12" id="tablobody">
                                    @foreach(explode(',' , $product->image ) as $images)
                                        <div class="col-md-3">
                                            <img src="{{ asset($images) }}" width="240">
                                            <input type="hidden" name="image[]" value="{{ $images }}">
                                            <div class="panel-footer">
                                                <a href="#" class="btn btn-danger remove_field" id="sil"><i class="fa fa-times"></i>&nbsp;Sil</a>
                                               </div>
                                            </div>
                                        @endforeach


                                </div>
                            </div>
                        </div>


                    </post>
                </div>
            </div>
        </div>
    </div>


</form>


<script>
    function seosec(i) {
    $('#seosecinput').val(i);
    }
    var button  = document.getElementById("clickme"),
        count   = 0;
    var url     = '{{ url('/admin/file-directory')}}';
    button.onclick = function() {
        var width   = '1000';
        var height  = '450';
        var left = (screen.width/2)-(width/2);
        var top = (screen.height/2)-(height/2);
        return window.open(url,'Dosya Yoneticisi','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+width+', height='+height+', top='+top+', left='+left);
    };
    function processFile(files){
        var files = files.slice(1, 50);
        var resimurl= '{{ asset('') }}';
        //$('#etiketdosyasi'+ count ).val(files);
        //$('#'+ count + 'aa').val(files);
        var form = 1 ;
        count += 1;
        $('#countvalue').html(count + ' Adet Resim Eklediniz');
        $('#tablobody').append('<div>'+
            '<div class="col-md-3"> '+
            '<img src="'+resimurl+ files +'" width="240"> '+
            '<input type="hidden" name="image[]" value="'+ files +'"> '+
            '<div class="panel-footer">'+
            '<a href="#" class="btn btn-danger remove_field" id="sil"><i class="fa fa-times"></i>&nbsp;Sil</a>'+
            '</div>'+
            '</div>');
    }
    $(document).on("click", ".remove_field", function(){
        $(this).parent().parent().remove();
        count -= 1;
        $('#countvalue').html(count + ' Adet Resim Eklediniz');
    });
</script>
</script>

@endsection
