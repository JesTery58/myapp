@extends('admin/layouts.app')
@section('content')
<!-- Main content-->


    <div class="row">
        <div class="col-lg-12">
            <div class="view-header">
                <div class="pull-right text-right" style="line-height: 14px;margin-top: 9px;">

                    <a href="{{ url('admin/contact-setting/create') }}" class="btn btn-accent" ><i class="fa fa-plus"></i> Yeni Ekle</a>

                </div>
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-config"></i>
                </div>
                <div class="header-title">
                    <h3>
                        İletişim Bilgileri
                    </h3>
                    <small>Web Sitesinizde Eklediğiniz İletişim Bilgilerini Buradan Görebilirsiniz</small>
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
                            <th width="15%">Adres</th>
                            <th width="15%">Telefon</th>
                            <th width="15%">Fax</th>
                            <th width="15%">Mobil</th>
                            <th width="15%">Mail Adresi</th>
                            <th width="15%">Mail Adresi2</th>
                            <th width="15%">İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($contact_settings)
                            <?php $i=1; ?>
                            @foreach($contact_settings as $contact_setting)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ unserialize($contact_setting->name)['tr'] }}</td>
                                    <td>{{ $contact_setting->address }}</td>
                                    <td>{{ $contact_setting->phone }}</td>
                                    <td>{{ $contact_setting->phone_1 }}</td>
                                    <td>{{ $contact_setting->phone_2 }}</td>
                                    <td>{{ $contact_setting->mail }}</td>
                                    <td>{{ $contact_setting->mail_2 }}</td>
                                    <td><a href="{{ url('admin/contact-setting/update/' .$contact_setting->id.'') }}" class="btn btn-info btn-circle" type="button"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger btn-circle demo4" url="{{ url('admin/contact-setting/delete/' .$contact_setting->id.'') }}" onclick="demo4"><i class="fa fa-times"></i></a>
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

