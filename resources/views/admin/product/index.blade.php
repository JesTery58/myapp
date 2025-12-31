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
    <div class="col-md-12">
        <form action="{{  url('admin/products') }}" method="POST" role="form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="col-md-3"> <input type="text" name="search" class="form-control" value=""/></div>
            <div class="col-md-3"> <button type="submit" class="btn btn-success">Ara</button> <a href="{{  url('admin/products') }}" class="btn btn-warning">Temizle</a></div>
        </form>
    </div>
    <hr>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="hpanel panel-collapse">
            <div class="panel-body" style="display: block;">
                
                <table id="tableExample4" class="table table-striped table-bordered table-hover" width="100%" >
                    <thead>
                    <tr>
                      <th width="2%">No</th>
                        <th width="2%"><i class="fa fa-copy"></i></th>
                        <th width="5%">R1</th>
                        <th width="5%">Ürün Kodu</th>
                        <th width="15%">Ürün Kısa Açıklaması</th>
                        <th width="15%">Kategori</th>
                        <th width="5%">Durum</th>
                        <th width="5%">Sıra</th>
                        <th width="5%">İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($products)
                        <?php $i=1; ?>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $i }}</td>
                                <td><a href="{{ url('admin/products/copy/'.$product->id.'')}}"><i class="fa fa-copy"></i></a></td>
                                <td> @foreach(explode(',' , $product->image ) as $images)

                                        <img src="{{ asset($images) }}" width="50">

                                    @endforeach</td>
                                <td>{{ $product->code }}</td>
                                <td>{{ unserialize($product->caption)['tr'] }}</td>
                                <td>{{ $product->category_id }}</td>
                                <td>{{ $product->status }}</td>
                                <td>{{ $product->orders }}</td>
                                <td><a href="{{ url('admin/products/update/' .$product->id.'') }}" class="btn btn-info btn-circle" type="button"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger btn-circle demo4" url="{{ url('admin/products/delete/' .$product->id.'') }}" onclick="demo4"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                {{ $products->links() }}
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


@endsection
