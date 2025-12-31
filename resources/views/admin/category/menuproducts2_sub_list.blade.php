<ul class="fa-ul text-s">
@foreach ($children as $parent)
<li><i class="fa-li im-road"></i> <a href="{{ ('/products/'.$parent->seo_url) }}">{{ isset(unserialize($parent->name)[$lang]) ? unserialize($parent->name)[$lang] : unserialize($parent->name)['en'] }}</a></li>
@endforeach
</ul>



