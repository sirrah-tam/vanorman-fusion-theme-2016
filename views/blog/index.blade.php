@extends(Theme::getLayout())

@php($categories = categories('blog'))
@php($posts = matrix_entries('blog', 'posts')->paginate(15, ['*'], 'page', Request::get('page')))

@section('header')
    <h1 class="page-header">Blog</h1>
@stop

@section('class', 'blog-overview')

@section('content')
<div class="blog-section content">
    <div class="wrapper">
        <div class="sidebar-cont">
            <div class="blog-list">
                <div class="masonry" data-columns>
                    @foreach ($posts->reverse() as $post)
                        <div class="blog-post-content">
                            <div class="blog-top">
                                 <div class="date">
                                    <small>
                                        <i class="btl bt-calendar bt-lg"></i>
                                        <br>
                                        {{ $post->created_at->format('M d') }}
                                    </small>
                                </div>
                                <div class="post-title">
                                     <h3>
                                        <a href="{{ $post->uri }}">{{ $post->title }}</a><br>
                                    </h3>
                                </div>
                            </div>
                            <div class="blog-post-inner">
                                <h4>by {{ $post->creator->full_name }}</h4>
                                @if ($post->categories->count())
                                    <ul class="post-categories"><small>Posted in:</small> 
                                        @foreach ($post->categories as $key => $category)
                                            @if ($post->categories->keys()->last() !== $key)
                                                <li><a href="{{ url($category->uri) }}">{{ $category->title }}</a></li>
                                            @else
                                                <li><a href="{{ url($category->uri) }}">{{ $category->title }}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @endif


                                {!! $post->excerpt !!}

                                <a class="btn btn-primary" href="{{ $post->uri }}">Read More <i class="btl bt-angle-right bt-fw bt-sm"></i></a>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>

            <div class="blog-pagination">
                {{ $posts->links() }}
            </div>
        </div>

        <div class="blog-sidebar">
            <div class="blog-sidebar-inner">
                @if ($categories)
                    <h3 class="sidebar-header">Categories</h3>
                    <ul class="blog-categories">
                        @foreach($categories as $category)
                            <li><a href="{{ url($category->uri) }}">
                                <h4><span class="badge">{{ $category->entries->count() }}</span> Posts about {{ $category->title }}</h4>
                            </a></li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</div>
@stop
