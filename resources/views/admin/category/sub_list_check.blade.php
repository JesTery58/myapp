
<ul style="list-style-type: none">
@foreach ($children as $parent)
                <div style="padding: 5px;">
                        <li>
                                <div style="float: left">
                                    <input type="checkbox" name="parent_id" id="1" value="{{ $parent->seo_url }}"
                                           @if($control_id)
                                            @if($control_id == $parent->seo_url)  checked @endif
                                           @endif class="" onclick="seosec(this.value)">
                                 </div>
                                <div style="margin-left: 20px;">{{ unserialize($parent->name)['tr'] }}</div>
                                @if($parent->children ->isNotEmpty())
                                        @include ('/admin/category/sub_list_check', [ 'children' => $parent->children , 'control_id'=> $control_id ])
                                @endif
                        </li>
                </div>
@endforeach
</ul>
