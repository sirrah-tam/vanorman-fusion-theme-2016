@extends(\Theme::getLayout())

@section('header')
    Codex
@stop

@section('content')
    <div class="container">
        @if ($books->count())
            <div class="row">
                @foreach ($books as $book)
                    @can('codex.book.show.'.$book->slug)
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">{{ $book->title }}</h3>
                                </div>

                                <div class="panel-body">
                                    {!! $book->description !!}
                                </div>

                                <div class="panel-footer text-center">
                                    <a href="{{ route('codex.show', ['book' => $book->slug]) }}" class="btn btn-primary">Read Documentation</a>
                                </div>
                            </div>
                        </div>
                    @endcan
                @endforeach
            </div>
        @endif
    </div>
@endsection
