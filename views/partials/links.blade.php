@foreach ($items as $item)
    <li>
        <a href="{{ url($item->url()) }}">
            {{ $item->title }}
        </a>
    </li>
@endforeach