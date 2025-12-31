@extends('admin/layouts.app')
@section('content')
<!-- Main content-->



<div class="row">
    <div class="col-lg-12">
        <div class="view-header">
            <div class="pull-right text-right" style="line-height: 14px;margin-top: 9px;">

                <a href="{{ url('admin/blog/create') }}" class="btn btn-accent" ><i class="fa fa-plus"></i> Yeni Ekle</a>

            </div>
            <div class="header-icon">
                <i class="pe page-header-icon pe-7s-config"></i>
            </div>
            <div class="header-title">
                <h3 class="font-light m-b-xs">
                   Blog Yazıları
                </h3>
                <small>Eklediğiniz Blog Yazılarını Buradan Görebilirsiniz</small>
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

                <table id="tableExample3" class="table table-striped table-bordered table-hover" width="100%" >
                    <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="15%">Başlık</th>
                        <th width="15%">Başlık Alt Yazısı</th>
                        <th width="15%">Kategori</th>
                        <th width="15%">Durum</th>
                        <th width="15%">Sıra</th>
                        <th width="15%">Resim</th>
                        <th width="5%">İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($blogs)
                        <?php $i=1; ?>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ unserialize($blog->caption)['tr'] }}</td>
                                <td>{{ unserialize($blog->caption_two)['tr'] }}</td>
                                <td>{{ $blog->catseo }}</td>
                                <td>{{ $blog->status }}</td>
                                <td>{{ $blog->orders }}</td>
                                <td><img src='{{ asset(''.$blog->image.'') }}'height="50"> </td>
                                <td><a href="{{ url('admin/blog/update/' .$blog->id.'') }}" class="btn btn-info btn-circle" type="button"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger btn-circle demo4" url="{{ url('admin/blog/delete/' .$blog->id.'') }}" onclick="demo4"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>









@endsection
