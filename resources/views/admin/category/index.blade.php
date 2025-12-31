@extends('admin/layouts.app')
@section('content')
<!-- Main content-->



<div class="row">
    <div class="col-lg-12">
        <div class="view-header">
            <div class="pull-right text-right" style="line-height: 14px;margin-top: 9px;">

                <a href="{{ url('admin/category/create/'.$type.'/0') }}" class="btn btn-accent" ><i class="fa fa-plus"></i> Ana Kategori Ekle</a>

            </div>
            <div class="header-icon">
                <i class="pe page-header-icon pe-7s-config"></i>
            </div>
            <div class="header-title">
                <h3 class="font-light m-b-xs">
                   Kategoriler
                </h3>
                <small>Eklediğiniz Kategorileri Buradan Görebilirsiniz</small>
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
                <ul style="list-style-type: none">
                    @foreach ($categories as $category)
                        <div style="padding: 2px;">
                        <li>
                            <div style="float: left">
                                <a href="{{ url('admin/category/create/'.$type.'/' .$category->id.'') }}" style="padding: 2px;font-size: 15px;" class="btn btn-warning btn-circle" type="button"><i class="fa fa-plus"></i></a>
                                <a href="{{ url('admin/category/update/'.$type.'/' .$category->id.'') }}" style="padding: 2px;font-size: 15px;" class="btn btn-info btn-circle" type="button"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-danger btn-circle demo4" style="padding: 2px;font-size: 15px;" url="{{ url('admin/category/delete/'.$type.'/' .$category->id.'') }}" onclick="demo4"><i class="fa fa-times"></i></a>
                            </div>
                            <div style="margin-left: 80px;">{{ unserialize($category->name)['tr'] }} @if($category->parent_id == 0) (Ana Kategori) @endif </div>
                            @if($category->children ->isNotEmpty())
                            @include ('/admin/category/sub_list' , [ 'children' => $category->children , 'type'== $type , 'control_id'=> '' ] )
                            @endif
                        </li>
                        </div>
                    @endforeach
                </ul>


            </div>
        </div>
    </div>
</div>









@endsection

