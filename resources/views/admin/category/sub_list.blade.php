
<ul style="list-style-type: none">
@foreach ($children as $parent)
                <div style="padding: 5px;">
                        <li>
                                <div style="float: left">
                                    <a href="{{ url('admin/category/create/'.$type.'/' .$parent->id.'') }}" style="padding: 2;font-size: 15px;" class="btn btn-warning btn-circle" type="button"><i class="fa fa-plus"></i></a>
                                    <a href="{{ url('admin/category/update/'.$type.'/' .$parent->id.'') }}" style="padding: 2;font-size: 15px;" class="btn btn-info btn-circle" type="button"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger btn-circle demo4" style="padding: 2;font-size: 15px;" url="{{ url('admin/category/delete/'.$type.'/' .$parent->id.'') }}" onclick="demo4"><i class="fa fa-times"></i></a>
                                </div>
                                <div style="margin-left: 80px;">{{ unserialize($parent->name)['tr'] }}</div>
                                @if($parent->children ->isNotEmpty())
                                        @include ('/admin/category/sub_list', [ 'children' => $parent->children])
                                @endif
                        </li>
                </div>
@endforeach
</ul>
