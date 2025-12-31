@extends('admin/layouts.app')
@section('content')
<!-- Main content-->



<div class="row">
    <div class="col-lg-12">
        <div class="view-header">
            <div class="pull-right text-right" style="line-height: 14px;margin-top: 9px;">

                <a href="{{ url('admin/slider/create') }}" class="btn btn-accent" ><i class="fa fa-plus"></i> Yeni Ekle</a>

            </div>
            <div class="header-icon">
                <i class="pe page-header-icon pe-7s-config"></i>
            </div>
            <div class="header-title">
                <h3 class="font-light m-b-xs">
                   Sliderler
                </h3>
                <small>Web Sitesinize Eklediğiniz Sliderleri Buradan Görebilirsiniz</small>
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
                        <th width="15%">Durum</th>
                        <th width="15%">Url</th>
                        <th width="15%">Sıra</th>
                        <th width="15%">Resim</th>
                        <th width="5%">İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($slider)
                        <?php $i=1; ?>
                        @foreach($slider as $slide)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ unserialize($slide->caption)['tr'] }}</td>
                                <td>{{ unserialize($slide->caption_two)['tr'] }}</td>
                                <td>{{ $slide->status }}</td>
                                <td>{{ $slide->url }}</td>
                                <td>{{ $slide->orders }}</td>
                                <td><img src="{{ asset(''.$slide->image.'') }}" height="50"> </td>
                                <td><a href="{{ url('admin/slider/update/' .$slide->id.'') }}" class="btn btn-info btn-circle" type="button"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger btn-circle demo4" url="{{ url('admin/slider/delete/' .$slide->id.'') }}" onclick="demo4"><i class="fa fa-times"></i></a>
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
        $(window.value).html('<img src="{{ asset("assets/") }}'+file+'"  width="200"/>');
        $(window.value+'a').val(file);
    }

</script>






@endsection

