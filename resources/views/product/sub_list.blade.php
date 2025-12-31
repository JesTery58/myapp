
@foreach ($children as $parent)
    <li><a href="{{ url('product/'.$parent->seo_url.'') }}"> {{ unserialize($parent->name)[$lang] }}</a> </li>
@endforeach

