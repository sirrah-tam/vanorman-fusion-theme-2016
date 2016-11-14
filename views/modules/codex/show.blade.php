@extends(\Theme::getLayout())

@section('header')
    {{ $book->title }}
@stop

@section('content')
	<div class="container">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    {!! $toc->rendered_content !!}
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <h1>{{ $page->title }}</h1>

    		{!! $page->rendered_content !!}
        </div>
	</div>
@endsection
