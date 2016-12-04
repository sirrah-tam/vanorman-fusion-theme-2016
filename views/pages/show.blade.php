@extends(Theme::getLayout())

@section('content')
    <div class="info-masthead">
        <div class="wrapper">
            <div class="center-intro-text">   
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
