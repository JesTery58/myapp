
<ul class="dropdown-menu">
@foreach ($children as $parent)
        <li><a href="@if($parent->children ->isEmpty()) {{ ('/blog/'.$parent->seo_url) }}@endif"">{{ unserialize($parent->name)[$lang] }}</a>

                    @if($parent->children ->isNotEmpty())

                            @include ('/admin/category/blog_sub_list', [ 'children' => $parent->children])

                    @endif
        </li>

@endforeach
</ul>
