@extends(Theme::getLayout())

@php($categories = categories('blog'))
@php($posts = $entries->paginate(5, ['*'], 'page', Request::get('page')))

@section('header')
    <h1 class="page-header">Blog</h1>
@stop

@section('subheader')
    <h2>{{ $category->title }}</h2>
@stop

@section('class', 'blog-overview')

@section('content')
<div class="blog-section content">
    <div class="wrapper">
        <div class="intro">
            <p class="lead text-center">
                {{ strip_tags($category->description) }}
            </p>
        </div>
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
                                <div class="author">
                                    <img src="{{ $post->creator->gravatar(200) }}" class="inline author-image"><small class="author-name">by {{ $post->creator->full_name }}</small>
                                </div>
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

        <div class="blog-sidebar">
            @if ($categories)
                <h3 class="section-title">Categories</h3>
                <ul class="blog-categories">
                    @foreach($categories as $category)
                        <li><a href="{{ url($category->slug) }}">
                            <h4><span class="badge">{{ $category->entries->count() }}</span> Posts about {{ $category->title }}</h4>
                        </a></li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
@stop
