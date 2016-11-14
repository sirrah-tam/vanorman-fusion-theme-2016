@extends(Theme::getLayout())

@section('header')
    @if (is_null($query))
        Search
    @else
        Search Results
    @endif
@stop

@section('subheader')
    @if (! is_null($query))
        "{{ $query }}"
    @endif
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['method' => 'GET', 'route' => ['search'], 'role' => 'search']) !!}
                    <div class="form-group">
                        <div class="input-group">
                            {!! Form::text('query', null, ['class' => 'form-control', 'placeholder' => 'What are you looking for?', 'style' => 'width: 100% !important;']) !!}
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </span>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>

        <div class="col-md-8 col-md-offset-2">
            @if ($results)
                @foreach ($results as $group => $found)
                    <h3>{{ $group }}</h3>

                    <div class="list-group">
                        @foreach ($found as $result)
                            <a href="{{ url($result->uri) }}" class="list-group-item">{{ $result->title }}</a>
                        @endforeach
                    </div>

                    <hr>
                @endforeach
            @else
                @if (is_null($query))
                    {{-- <h3>Search for something to see results.</h3> --}}
                @else
                    <div class="text-center">
                        <h3>No Results.</h3>
                    </div>
                @endif
            @endif
        </div>
    </div>
@endsection
