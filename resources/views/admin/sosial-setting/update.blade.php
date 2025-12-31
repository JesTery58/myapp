@extends('admin/layouts.app')
@section('content')
<!-- Main content-->



<!-- Main content-->
<form method="post" action="{{ url('admin/sosial-setting/update/'.$id.'')}}" role="form">
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
                        Sosyal Medya Güncelle
                    </h3>
                    <small>Sosyal Medya Bilgilerini Buardan Güncelleyebilirsiniz</small>
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


                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">

                        <div class="panel-body">
                            <div class="form-group"><label class="col-sm-2 control-label">Adı</label>
                                <div class="col-sm-10">
                                    <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="name" value="{{ $sosial->name }}" class="form-control" ></div>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Dil Kodu</label>
                                <div class="col-sm-10">
                                    <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="code" value="{{ $sosial->code }}" class="form-control" ></div>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Durum</label>
                                <div class="col-sm-10">
                                    <div class="input-group m-b"><span class="input-group-addon"></span>
                                        <select type="text" name="status"  class="form-control" >
                                            <option value="1" @if( $sosial->status == 1) selected @endif >Aktif</option>
                                            <option value="0" @if( $sosial->status == 0) selected @endif>Pasif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Url</label>
                                <div class="col-sm-10">
                                    <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="url" value="{{ $sosial->url }}" class="form-control" ></div>
                                </div>
                            </div>


                        </div>

                    </div>

                    </post>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
