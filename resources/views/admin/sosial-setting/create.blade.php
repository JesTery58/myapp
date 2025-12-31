@extends('admin/layouts.app')
@section('content')
    <!-- Main content-->



    <!-- Main content-->
    <form method="post" action="{{ url('admin/sosial-setting/create')}}" role="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="row">
            <div class="col-lg-12">
                <div class="view-header">
                    <div class="pull-right text-right" style="line-height: 14px;margin-top: 9px;">

                        <a href="{{ url('admin/sosial-setting') }}" class="btn" ><i class="fa fa-arrow-left"></i> Geri</a>
                        <button type="submit" name="submit" value="1" class="btn w-xs btn-success"><i class="fa fa-save"></i> Kaydet</button>

                    </div>
                    <div class="header-icon">
                        <i class="pe page-header-icon pe-7s-config"></i>
                    </div>
                    <div class="header-title">
                        <h3 class="font-light m-b-xs">
                            Yeni Sosyal Medya Ekle
                        </h3>
                        <small>Yeni Sosyal Medya Bilgilerini Ekleyebilirsiniz</small>
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
                                <div class="form-group"><label class="col-sm-2 control-label">Sosyal Medya Adı</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="name" value="" class="form-control" ></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Sosyal Medya Kodu</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="code" value="" class="form-control" ></div>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Durum</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span>
                                            <select type="text" name="status"  class="form-control" >
                                                <option value="1">Aktif</option>
                                                <option value="0">Pasif</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">URL</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon"></span> <input type="text" name="url" value="" class="form-control" ></div>
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
