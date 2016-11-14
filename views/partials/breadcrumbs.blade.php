<ol class="breadcrumb">
    <li>
        <i class="fa fa-home"></i>
        <a href="/">Home</a>
    </li>

    @for($i = 1; $i <= count(Request::segments()); $i++)
        <li>
            @if ($i < count(Request::segments()) & $i > 0)
                <a href="">{{ title_case(Request::segment($i)) }}</a>
            @else
                {{ title_case(Request::segment($i)) }}
            @endif
        </li>
    @endfor
</ol>
