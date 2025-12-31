@extends('admin.layouts.app')
@section('content')
<!-- Main content-->


<form method="post" action="{{ url('admin/web-setting/robottxt')}}" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="row">
    <div class="col-lg-12">
        <div class="view-header">
            <div class="pull-right text-right" style="line-height: 14px;margin-top: 9px;">
                <button type="submit" name="submit" value="1" class="btn btn-accent" ><i class="fa fa-refresh"></i> Güncelle</button>

            </div>
            <div class="header-icon">
                <i class="pe page-header-icon pe-7s-config"></i>
            </div>
            <div class="header-title">
                <h3 class="font-light m-b-xs">
                    Robot TXT
                </h3>
                <small>Web Sitesinizin Robot TXT Ayarlarını Buradan Yapabilirsiniz</small>
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
                <textarea name="roboticerik" class="form-control">
                    {{ File::get(resource_path('lang/tr/words.php')) }}
                </textarea>

            </div>
        </div>
    </div>
</div>
</form>
<script>
    $('textarea').ckeditor();
    // $('.textarea').ckeditor(); // if class is prefered.
</script>
@endsection

