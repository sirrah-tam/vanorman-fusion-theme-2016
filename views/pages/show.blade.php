@extends(Theme::getLayout())

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>{{ $entry->title }}</h1>
            <p>{{ $entry->subtitle }}</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! $entry->content !!}
        </div>
    </div>
@endsection
