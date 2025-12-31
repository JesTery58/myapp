@extends('admin/layouts.app')
@section('content')
<!-- Main content-->



<div class="row">
    <div class="col-lg-12">
        <div class="view-header">
            <div class="pull-right text-right" style="line-height: 14px;margin-top: 9px;">

                <a href="{{ url('admin/products/create') }}" class="btn btn-accent" ><i class="fa fa-plus"></i> Yeni Ekle</a>

            </div>
            <div class="header-icon">
                <i class="pe page-header-icon pe-7s-config"></i>
            </div>
            <div class="header-title">
                <h3 class="font-light m-b-xs">
                   Ürünler
                </h3>
                <small>Web Sitesinize Eklediğiniz Ürünleri Buradan Görebilirsiniz</small>
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



                <?php


                class dilal{
                    public static function dilaltr($id){
                        $urunler =DB::table('kategoriler_langs')->where('main_id','=',$id)->where('language_id','=','TR')->get();
                        foreach ($urunler as $urun){
                            echo $urun->lang_name;
                        }
                        return;
                    }
                    public static function dilalen($id){
                        $urunler =DB::table('kategoriler_langs')->where('main_id','=',$id)->where('language_id','=','EN')->get();
                        foreach ($urunler as $urun){
                            echo $urun->lang_name;
                        }
                        return;
                    }

                }

                ?>
                    <form method="post" action="{{ url('admin/products/al')}}" role="form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" name="submit" value="1" id="foo" class="btn w-xs btn-success"><i class="fa fa-save"></i> Kaydet</button>
                <table id="tableExample3www" class="table table-striped table-bordered table-hover" width="100%" >
                    <thead>
                    <tr>
                      <th width="2%">No</th>
                        <th width="5%">id</th>
                        <th width="15%">parent_id</th>
                        <th width="15%">type</th>

                        <th width="5%">seo_url</th>
                        <th width="5%">name</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if($urunler)
                        <?php
                        $diller = new dilal();
                        $i=1; ?>
                        @foreach($urunler as $product)

                            <tr>
                                <td>{{ $i }}</td>
                                <td><input name="silid" value="{{ $product->id }}" required></td>
                                <td><input name="parent_id" value="{{ $product->menu_id }}" required></td>
                                <td><input name="type" value="product" required></td>

                                <td><input name="seo_url" value="{{ $product->menu_name }}" required></td>
                                <td><input name="name[tr]" value="{{ $diller->dilaltr($product->id) }}">||<input name="name[en]" value="{{ $diller->dilalen($product->id) }}"></td>
                                <td><input name="title[tr]" value="{{ $diller->dilaltr($product->id) }}">||<input name="title[en]" value="{{ $diller->dilalen($product->id) }}"></td>
                                <td><input name="description[tr]" value="{{ $diller->dilaltr($product->id) }}">||<input name="description[en]" value="{{ $diller->dilalen($product->id) }}"></td>
                                <td><input name="keywords[tr]" value="{{ $diller->dilaltr($product->id) }}">||<input name="keywords[en]" value="{{ $diller->dilalen($product->id) }}"></td>



                            </tr>
                            <?php $i++; ?>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                    </form>
            </div>
        </div>
    </div>
</div>





<style>

    .lightBoxGallery {
        text-align: center;
    }

    .lightBoxGallery a {
        margin: 5px;
        display: inline-block;
    }

</style>

<script>
    $(document).ready(function(){


        setTimeout(function() {
            $( "#foo" ).trigger( "click" );
        }, 1000);


    });

</script>


@endsection
