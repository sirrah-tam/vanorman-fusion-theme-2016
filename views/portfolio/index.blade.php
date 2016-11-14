@extends(Theme::getLayout())

@section('header')
    Portfolio
@stop

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($collection->types->where('slug', 'projects')->first()->entries as $project)
                <div class="col-md-4">
                    <a href="{{ url($project->uri) }}">
                        <img class="img-responsive" src="http://placehold.it/700x400">
                    </a>

                    <h3><a href="{{ url($project->uri) }}">{{ $project->title }}</a></h3>

                    <p>{{ $project->excerpt }}</p>
                </div>
            @endforeach
        </div>
    </div>
@stop
