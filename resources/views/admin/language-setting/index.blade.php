@extends('admin/layouts.app')
@section('content')
<!-- Main content-->



<div class="row">
    <div class="col-lg-12">
        <div class="view-header">
            <div class="pull-right text-right" style="line-height: 14px;margin-top: 9px;">

                <a href="{{ url('admin/language-setting/create') }}" class="btn btn-accent" ><i class="fa fa-plus"></i> Yeni Ekle</a>

            </div>
            <div class="header-icon">
                <i class="pe page-header-icon pe-7s-config"></i>
            </div>
            <div class="header-title">
                <h3 class="font-light m-b-xs">
                    Diller
                </h3>
                <small>Web Sitesinizde Eklediğiniz Dilleri Buradan Görebilirsiniz</small>
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
                        <th width="15%">Adı</th>
                        <th width="15%">Dil Kodu</th>
                        <th width="15%">Durum</th>
                        <th width="15%">Resim</th>
                        <th width="15%">Dil Dosyası</th>
                        <th width="10%">İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($languages)
                        <?php $i=1; ?>
                        @foreach($languages as $language)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{$language->name }}</td>
                                <td>{{ $language->code }}</td>
                                <td>@if($language->status == 1 ) <div style="border-radius:10px;text-align:center;width:75px;padding: 2px;background: #83de83;color: #fbfbfb;">Aktif</div>
                                    @else <div style="border-radius:10px;text-align:center;width:75px;padding: 2px;background: #e57432;color: #fbfbfb;">Pasif </div>@endif </td>
                                <td><img src="{{ asset(''.$language->image.'') }}" height="20"></td>
                                <td><a href="{{ url('admin/language-setting/langedit/' .$language->code.'') }}" class="btn btn-success btn-circle" type="button"><i class="fa fa-edit"></i> {{ $language->code }} Dil Dosyası</a></td>
                                <td><a href="{{ url('admin/language-setting/update/' .$language->id.'') }}" class="btn btn-info btn-circle" type="button"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger btn-circle demo4" url="{{ url('admin/language-setting/delete/' .$language->id.'') }}" onclick="demo4"><i class="fa fa-times"></i></a>
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

