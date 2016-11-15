<div class="bct-wrapper">
    <div class="container">
        <div class="bct">
            <ul class="breadcrumb list-inline">
                <li>
                    <i class="btl bt-home bt-fw"></i>
                    <a href="/">Home</a>
                </li>

                @for($i = 1; $i <= count(Request::segments()); $i++)
                    <li>
                        @if ($i < count(Request::segments()) & $i > 0)
                            <a href="/{{ str_slug(Request::segment($i)) }}">{{ title_case(Request::segment($i)) }}</a>
                        @else
                            {{ title_case(Request::segment($i)) }}
                        @endif
                    </li>
                @endfor
            </ul>
        </div>
    </div>
</div>
