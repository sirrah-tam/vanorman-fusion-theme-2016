@extends(Theme::getLayout())

@section('content')
    <div class="masthead">
        <div class="wrapper">
            <div class="masthead-text">   
                <h1>{{ $entry->title }}</h1>
                <p>{{ $entry->subtitle }}</p>
            </div>
        </div>
    </div>
    @include('vanorman::partials.breadcrumbs')
    <div class="content">
        <div class="wrapper">
            {!! $entry->content !!}
        </div>
    </div>
@stop
