@extends(Theme::getLayout())

@php($posts = (matrix_exists('blog') ? matrix_entries('blog')->findAll()->reverse()->slice(0, 6) : null))
@php($pagecontent = (matrix_exists('pages') ? matrix_entries('pages')->where('slug', 'index')->first() : null))
@php($about = (matrix_exists('pages') ? matrix_entries('pages')->where('slug', 'about')->first() : null))
@php($spotlights = (matrix_exists('spotlights') ? matrix_entries('spotlights')->findAll() : null))

@section('class', 'home')

@section('content')
     <div class="info-masthead">
        <div class="wrapper">
            <div class="img-col">
                <img class="img-responsive img-circle img-circle-primary" src="{{ variable('mugshot') }}" alt="Cameron Van Orman - Mugshot">
            </div>
            <div class="info-col">
                <div class="intro-text">
                    <h1 class="page-header">{{ $pagecontent->title }}</h1>
                    <h2>{{ $pagecontent->subtitle }}</h2>
                    <ul class="contact-menu">
                        <li>
                            <i class="btl bt-globe bt-fw"></i> {{ variable('location') }}
                        </li>
                        <li>
                            <a href="{{ variable('resume') }}" target="_blank"><i class="btl bt-notebook bt-fw"></i> Resume</a>
                        </li>
                        <li>
                            <i class="btl bt-code bt-fw"></i> {{ variable('job-role') }} @ <a class="brand-efelle" href="{{ variable('employer-url') }}" target="_blank">{{ variable('employer') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Spotlight - Weather -->
    <div class="spotlight-list weather">
        <div class="wrapper">
            <div class="panel panel-transparent">
                <div id="weather"></div>
            </div>
        </div>
    </div>
    
    <!-- Blog -->
    @if (! is_null($posts))
        <div class="blog-section">
            <div class="wrapper">
                <div class="text-center section-header">    
                    <h3 class="section-title">Blog</h3>
                    <hr class="small">
                </div>
                <div class="blog-list">
                    <div class="masonry" data-columns>
                        @foreach ($posts as $post)
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
                                            <a href="{{ $post->uri }}">{{ $post->title }}</a>
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
                                    <p>
                                        {!! $post->excerpt !!}
                                    </p>
                                    <a href="{{ url($post->uri) }}">Read More <i class="btl bt-angle-right bt-sm bt-fw"></i></a>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
    
@endsection
