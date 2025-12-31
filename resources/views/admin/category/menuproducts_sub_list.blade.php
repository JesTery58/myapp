@foreach ($subproductCategory as $parent)
        @if($parent->parent_id == $kontrolID)

                @if($parent->children ->isNotEmpty())
                        <div class="col">
                                <h5>{{ isset(unserialize($parent->name)[$lang]) ? unserialize($parent->name)[$lang] : unserialize($parent->name)['en']  }}</h5>
                                @if($parent->children ->isNotEmpty())
                                        @include ('/admin/category/menuproducts2_sub_list', [
                                        'children' => $parent->children ,
                                                    'subproductCategory'=> $subproductCategory,
                                                    'kontrolID'=> $parent->id,

                                        ])
                                @endif
                        </div>
                @endif

        @endif
@endforeach

<div class="col">
        <ul class="">
                @foreach ($subproductCategory as $parenta)
                        @if($parenta->parent_id == $kontrolID)

                                @if($parenta->children ->isEmpty())
                                        <li>
                                                <a href="{{ ('/products/'.$parenta->seo_url) }}">
                                                        <h5>{{ isset(unserialize($parenta->name)[$lang]) ? unserialize($parenta->name)[$lang] : unserialize($parenta->name)['en'] }}</h5>
                                                </a>
                                        </li>
                                @endif
                        @endif
                @endforeach
        </ul>
</div>
