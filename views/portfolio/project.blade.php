@extends(Theme::getLayout())

@section('header')
    {{ $entry->title }}
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive" src="http://placehold.it/750x500">
            </div>

            <div class="col-md-4">
                {!! $entry->description !!}
            </div>
        </div>
    </div>
@stop
