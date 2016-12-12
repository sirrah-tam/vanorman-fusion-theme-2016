@extends(Theme::getLayout())

@php($categories = categories('blog'))
@php($posts = matrix_entries('blog', 'posts')->paginate(5, ['*'], 'page', Request::get('page')))

@section('header')
    Blog
@stop

@section('class', 'blog-overview')

@section('content')
<div class="blog-section">
    <div class="wrapper">
        <div class="form-group {{ $errors->has('email') ? 'has-error' : null }}">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search...">
                <button class="input-group-addon" type="submit"><i class="btl bt-search"></i></button>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="col-md-9">
            <div class="row blog-list masonry" data-columns="4">
                @foreach ($posts->reverse() as $post)
                <div class="blog-post">
                    <div class="blog-post-inner">
                        <h3 class="post-title"><a href="{{ $post->uri }}">{{ $post->title }}</a></h3>

                        <p class="lead">By {{ $post->creator->full_name }}</p>

                        <p><i class="btl bt-clock bt-fw"></i> Posted on {{ $post->created_at->format('F d, Y') }} at {{ $post->created_at->format('h:i A') }}</p>

                        @if ($post->categories->count())
                            <p>
                                <i class="btl bt-folder-open bt-fw"></i> Categorized under:

                                    @foreach ($post->categories as $key => $category)
                                        @if ($post->categories->keys()->last() !== $key)
                                            <a href="{{ url($category->uri) }}">{{ $category->title }}</a>,&nbsp;
                                        @else
                                            <a href="{{ url($category->uri) }}">{{ $category->title }}</a>
                                        @endif
                                    @endforeach
                            </p>
                        @endif

                        <p>{!! $post->excerpt !!}</p>

                        <a class="btn btn-secondary" href="{{ $post->uri }}">Read More <i class="btl bt-angle-right"></i></a>
                    </div>

                </div>
                @endforeach
            </div>

            <div class="text-center">
                {{ $posts->links() }}
            </div>
        </div>

        <div class="col-md-3">

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
