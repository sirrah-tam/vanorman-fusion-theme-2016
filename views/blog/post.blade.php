@extends(Theme::getLayout())

@php($categories = categories('blog'))

@section('header')
    {{ $entry->title }}
@stop

@section('subheader')
    by {{ $entry->creator->full_name }}
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <hr>

                <p><i class="fa fa-clock-o"></i> Posted on {{ $entry->created_at->format('F d, Y') }} at {{ $entry->created_at->format('h:i A') }}</p>

                <hr>

                <span class="lead">{!! $entry->excerpt !!}</span>

                {!! $entry->content !!}

                <hr>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search blog...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>

                @if ($categories)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>

                        <div class="list-group">
                            @foreach($categories as $category)
                                <a href="{{ url($category->uri) }}" class="list-group-item">
                                    <span class="badge">{{ $category->entries->count() }}</span>
                                    {{ $category->title }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
