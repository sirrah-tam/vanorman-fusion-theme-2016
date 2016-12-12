@extends(Theme::getLayout())

@php($categories = categories('blog'))
@php($posts = matrix_entries('blog', 'posts')->paginate(15, ['*'], 'page', Request::get('page')))

@section('header')
    Blog
@stop

@section('class', 'blog-overview')

@section('content')
<div class="blog-section content">
    <div class="wrapper-fluid">
        <div class="row">
            <div class="sidebar-cont">
                <div class="blog-list">
                    
                    <div class="masonry" data-columns>
                        @foreach ($posts->reverse() as $post)
                        <div class="blog-post">
                            <div class="blog-post-inner">
                                <h3 class="post-title">
                                    <a href="{{ $post->uri }}">{{ $post->title }}</a><br>
                                </h3>
                                <p>
                                    <small class="post-date"><i class="btl bt-user bt-fw"></i> Posted by {{ $post->creator->full_name }}</small><br>
                                    <small class="post-date"><i class="btl bt-calendar bt-fw"></i> Posted on {{ $post->created_at->format('F d, Y') }}</small>
                                </p>

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

                                <a class="btn btn-secondary" href="{{ $post->uri }}">Read More <i class="btl bt-angle-right bt-fw bt-sm"></i></a>
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="blog-pagination">
                    {{ $posts->links() }}
                </div>
            </div>

            <div class="sidebar">

                @if ($categories)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>
                        <div class="list-group">
                            @foreach($categories as $category)
                                <a href="{{ url($category->uri) }}" class="list-group-item">
                                    <span class="circle-icon-sm">{{ $category->entries->count() }}</span>
                                    {{ $category->title }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
        </div>
</div>
@stop
