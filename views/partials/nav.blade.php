@foreach ($items as $item)
    <li {{ ($item->hasChildren()) ? 'class="dropdown"' : null }}>
        <a href="{{ $item->url() }}" {{ ($item->hasChildren()) ? 'class="dropdown-toggle" data-toggle="dropdown"' : null }}>
            {{ $item->title }} {{ ($item->hasChildren()) ? '<b class="caret"></b>' : null }}
        </a>

        @if ($item->hasChildren())
            <ul class="dropdown-menu">
                @foreach ($item->children() as $child)
                    <li><a href="{{ $child->url() }}">{{ $child->title }}</a></li>
                @endforeach
            </ul>
        @endif
    </li>

    @if ($item->divider)
        <li class="divider"></li>
    @endif
@endforeach
