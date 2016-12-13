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
                                        <small class="inline">by {{ $post->creator->full_name }}</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="blog-post-inner">
                                <div class="">
                                    <img src="{{ $post->creator->gravatar(200) }}" class="inline author-image">
                                </div>

                                @if ($post->categories->count())
                                    <ul class="post-categories">
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

        <div class="sidebar">
            @if ($categories)
                <h3 class="section-title">Categories</h3>
                <ul class="blog-categories">
                    @foreach($categories as $category)
                        <li><a href="{{ url($category->uri) }}">
                            <span class="badge">{{ $category->entries->count() }}</span>
                            {{ $category->title }}
                        </a></li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
@stop
