@extends(Theme::getLayout())

@php($categories = categories('blog'))
@php($posts = $entries->paginate(5, ['*'], 'page', Request::get('page')))

@section('header')
    Blog
@stop

@section('subheader')
    {{ $category->title }}
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <p class="lead text-center">
                    {{ strip_tags($category->description) }}
                </p>

                @foreach ($posts->reverse() as $post)
                    <h2><a href="{{ $post->uri }}">{{ $post->title }}</a></h2>

                    <p class="lead">By {{ $post->creator->full_name }}</p>

                    <p><i class="fa fa-clock-o fa-fw"></i> Posted on {{ $post->created_at->format('F d, Y') }} at {{ $post->created_at->format('h:i A') }}</p>

                    @if ($post->categories->count())
                        <p>
                            <i class="fa fa-folder-open fa-fw"></i> Categorized under:

                                @foreach ($post->categories as $key => $category)
                                    @if ($post->categories->keys()->last() !== $key)
                                        <a href="{{ url($category->uri) }}">{{ $category->title }}</a>,&nbsp;
                                    @else
                                        <a href="{{ url($category->uri) }}">{{ $category->title }}</a>
                                    @endif
                                @endforeach
                        </p>
                    @endif

                    <hr>

                    <p>{!! $post->excerpt !!}</p>

                    <a class="btn btn-primary" href="{{ $post->uri }}">Read More <i class="fa fa-angle-right"></i></a>

                    <hr>
                @endforeach

                <div class="text-center">
                    {{ $posts->links() }}
                </div>
            </div>

            <div class="col-md-3">

                @if (isset($categories))
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

                <div class="list-group">
                  <div class="list-group-item"><i class="btl bt-home bt-fw"></i> Home</div>
                  <div class="list-group-item"><i class="btl bt-book bt-fw"></i> Library</div>
                  <div class="list-group-item"><i class="btl bt-pencil bt-fw"></i> Applications</div>
                  <div class="list-group-item"><i class="btl bt-gear bt-fw"></i> Settings</div>
                </div>
            </div>
        </div>
    </div>
@stop
