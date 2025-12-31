
<ul class="dropdown-menu">
@foreach ($subproductCategory as $parent)
                @if($parent->parent_id == $kontrolID)
        <li><a href="@if($parent->children ->isEmpty()) {{ ('/pages/'.$parent->seo_url) }}@endif"">{{ $kontrolID }}/{{ unserialize($parent->name)[$lang] }}</a>
                    @if($parent->children ->isNotEmpty())
                            @include ('/admin/category/menus_sub_list', [ 'children' => $parent->children])
                    @endif
        </li>
@endif
@endforeach
</ul>
