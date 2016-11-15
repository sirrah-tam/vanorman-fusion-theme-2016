@extends(Theme::getLayout())

@section('content')
        <div class="masthead">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 masthead-text">   
                        <h1>{{ $entry->title }}</h1>
                        <p>{{ $entry->subtitle }}</p>
                    </div>
                </div>
            </div>
        </div>
        @include('vanorman::partials.breadcrumbs')
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        {!! $entry->content !!}
                </div>
            </div>
        </div>
@stop
