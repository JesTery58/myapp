@extends('admin/layouts.app')
@section('content')
<!-- Main content-->



<div class="row">
    <div class="col-lg-12">
        <div class="view-header">

            <div class="header-icon">
                <i class="pe page-header-icon pe-7s-config"></i>
            </div>
            <div class="header-title">
                <h3 class="font-light m-b-xs">
                   Mesajlar
                </h3>
                <small>Web Sitesinizden Gelen Mesajları Görebilir ve Cevap Yazabilirsiniz</small>
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
                        <th width="15%">Adı Soyadı</th>
                        <th width="15%">E-mail</th>
                        <th width="15%">Telefon</th>
                        <th width="15%">Mesaj</th>
                        <th width="5%">İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($messages)
                        <?php $i=1; ?>
                        @foreach($messages as $message)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $message->name }}  {{ $message->surname }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->phone }}</td>
                                <td>{{ str_limit($message->message, 20 ) }}</td>
                                <td><a href="{{ url('admin/messages/detail/'.$type.'/' .$message->id.'') }}" class="btn btn-info btn-circle" type="button"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger btn-circle demo4" url="{{ url('admin/messages/delete/' .$message->type.'/' .$message->id.'') }}" onclick="demo4"><i class="fa fa-times"></i></a>
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

