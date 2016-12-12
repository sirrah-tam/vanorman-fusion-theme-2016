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
                <hr class="small">
                <ul class="social list-inline">
                    <li><a href="{{ variable('social-linkedin') }}" target="_blank" class="btn-social btn-outline"><i class="fab fab-linkedin-alt bt-fw"></i></a></li>
                    <li><a href="{{ variable('social-github') }}" target="_blank" class="btn-social btn-outline"><i class="fab fab-github bt-fw"></i></a></li>
                    <li><a href="{{ variable('email') }}" class="btn-social btn-outline"><i class="btl bt-paper-plane bt-fw"></i></a></li>
                    <li><a href="{{ variable('social-spotify') }}" class="btn-social btn-outline" target="_blank"><i class="fab fab-spotify bt-fw"></i></a></li>
                </ul> 
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
                            <a href="{{ variable('resume') }}" target="_blank"><i class="btl bt-file bt-fw"></i> Resume</a>
                        </li>
                        <li>
                            <i class="btl bt-code bt-fw"></i> {{ variable('job-role') }} @ <a class="brand-efelle" href="{{ variable('employer-url') }}" target="_blank">{{ variable('employer') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Blog -->
    @if (! is_null($posts))
        <div class="spotlight-list blog-section">
            <div class="wrapper">
                <div class="text-center section-header">    
                    <h3 class="page-title"><i class="btl bt-notebook bt-fw"></i> Latest Ramblings</h3>
                    <hr class="small">
                </div>
                <div class="row">
                    <div class="blog-list">
                        <div class="masonry" data-columns>
                            @foreach ($posts as $post)
                                <div class="blog-post">
                                    <div class="blog-post-inner">
                                        <h3 class="post-title">
                                            <a href="{{ url($post->uri) }}">{{ $post->title }}</a>
                                        </h3>
                                        <p>
                                            <small><i class="btl bt-calendar bt-fw"></i> {{ $post->created_at->format(setting('date_format')) }}</small>
                                            <small><i class="btl bt-user bt-fw"></i> {{ $post->creator->full_name }}</small>
                                        </p>
                                    
                                        <a href="{{ url($post->uri) }}" class="btn btn-default center-block">Read More <i class="btl bt-caret-right bt-fw"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Stars -->
    <div class="spotlight-list">
        <div class="wrapper">
            <div class="caption">
                <i class="center-block btl bt-quote-left bt-2x"></i>
                <blockquote>
                    “The nitrogen in our DNA, the calcium in our teeth, the iron in our blood, the carbon in our apple pies were made in the interiors of collapsing stars. We are made of starstuff.”
                </blockquote>
                <h4>— Carl Sagan, Cosmos</h4>
            </div>
        </div>
    </div>

    <!-- Spotlight - Weather -->
    <div class="spotlight-list weather bg-custom bg-city">
        <div class="wrapper">
            <div class="panel panel-transparent">
                
                <div id="weather"></div>
            </div>
        </div>
    </div>

    <div class="spotlight-list">
        <div class="wrapper">
            <div class="caption">
                <i class="center-block btl bt-quote-left bt-2x"></i>
                <blockquote>
                    "I am not a genius. I am just a tremendous bundle of experience."
                </blockquote>
                <h4>— Buckminster Fuller</h4>
            </div>
        </div>
    </div>
    
@endsection
