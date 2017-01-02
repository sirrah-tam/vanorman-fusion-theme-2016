@extends(Theme::getLayout())

@section('header')
    {{ $entry->title }}
@stop

@section('subheader')
    Recipe
@stop

@section('content')
    <div class="wrapper">
        <div class="row">
            <div class="col-md-9">
                <hr>

                <p><i class="fa fa-cutlery fa-fw"></i> Contributed by <b>{{ $entry->creator->full_name }}</b> {{ $entry->updated_at->diffForHumans() }}</p>

                @if ($entry->categories)
                    <p>
                        <i class="fa fa-folder-open fa-fw"></i> Categorized under:

                            @foreach ($entry->categories as $key => $category)
                                @if ($entry->categories->keys()->last() !== $key)
                                    <a href="{{ url($category->uri) }}">{{ $category->title }}</a>,&nbsp;
                                @else
                                    <a href="{{ url($category->uri) }}">{{ $category->title }}</a>
                                @endif
                            @endforeach
                    </p>
                @endif

                <hr>

                {{-- Problem --}}
                <div class="row">
                    <div class="col-md-3">
                        <h4>
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-question fa-stack-1x fa-inverse"></i>
                            </span>

                            Problem
                        </h4>
                    </div>

                    <div class="col-md-9">
                        {!! $entry->problem !!}
                    </div>
                </div>

                <hr>

                {{-- Solution --}}
                <div class="row">
                    <div class="col-md-3">
                        <h4>
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-info fa-stack-1x fa-inverse"></i>
                            </span>

                            Solution
                        </h4>
                    </div>

                    <div class="col-md-9">
                        {!! $entry->solution !!}
                    </div>
                </div>

                {{-- Discussion --}}
                @if (! empty($entry->discussion))
                    <hr>

                    <div class="row">
                        <div class="col-md-3">
                            <h4>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-commenting fa-stack-1x fa-inverse"></i>
                                </span>

                                Discussion
                            </h4>
                        </div>

                        <div class="col-md-9">
                            {!! $entry->discussion !!}
                        </div>
                    </div>
                @endif
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search recipes...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Categories</h3>
                    </div>

                    <div class="list-group">
                        @foreach(categories('recipes') as $category)
                            <a href="{{ url($category->uri) }}" class="list-group-item">
                                <span class="badge">{{ $category->entries->count() }}</span>
                                {{ $category->title }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
