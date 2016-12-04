@extends(Theme::getLayout())

@php($posts = (matrix_exists('blog') ? matrix_entries('blog')->findAll()->reverse()->slice(0, 5) : null))

@section('content')
    <div class="info-masthead">
        <div class="wrapper">
                <div class="img-col">
                    <img class="img-responsive img-circle img-circle-primary" src="/asset/5843f4976ab0b?w=300" alt="Cameron Van Orman - Mugshot">
                    <hr class="small">
                    <ul class="social list-inline">
                        <li><a href="{{ variable('social-linkedin') }}" target="_blank" class="btn-social btn-outline"><i class="fab fab-linkedin-alt bt-fw"></i></a></li>
                        <li><a href="{{ variable('social-github') }}" target="_blank" class="btn-social btn-outline"><i class="fab fab-github bt-fw"></i></a></li>
                        <li><a href="mailto:cameron.vanorman@gmail.com" class="btn-social btn-outline"><i class="btl bt-paper-plane bt-fw"></i></a></li>
                        <li><a href="{{ variable('social-spotify') }}" class="btn-social btn-outline" target="_blank"><i class="fab fab-spotify bt-fw"></i></a></li>
                    </ul> 
                </div>
                <div class="info-col">
                    <div class="intro-text">
                        <h1 class="page-header">Cameron <br> Van Orman</h1>
                        <h2>Web Developer</h2>
                        <h4><i class="btl bt-globe bt-fw"></i> Seattle, WA</h4>
                        <a class="btn btn-secondary" href="/about">
                            Read More <i class="btl bt-caret-right bt-fw"></i>
                        </a>
                    </div>
                </div>
            
        </div>
    </div>
    <div class="spotlight-list">
        <div class="wrapper">
            <div class="caption">
                <blockquote>
                    "I am not a genius. I am just a tremendous bundle of experience."
                </blockquote>
                <h4>— Buckminster Fuller</h4>
            </div>
        </div>
    </div>
   <!--  <div class="cta about-section">
        <div class="wrapper">
            <div class="row">
                <div class="col-centered text-center">
                    
                </div>
            </div>
        </div>
    </div> -->
    <div class="blog-section">
        <div class="wrapper">
            <div class="row">    
                <h2 class="section-title"><i class="btl bt-book-open bt-fw"></i> Latest Ramblings</h2>
                <hr class="small">
            </div>
            <div class="row">
                @if (! is_null($posts))
                    @foreach ($posts as $post)
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <h3 class="post-title"><a href="{{ url($post->uri) }}">{{ $post->title }}</a></h3>
                                    <p>
                                        <small><i class="btl bt-calendar bt-fw"></i> {{ $post->created_at->format(setting('date_format')) }}</small>
                                        <small><i class="btl bt-user bt-fw"></i> {{ $post->creator->full_name }}</small>
                                    </p>
                                    <hr class="small">
                                </div>
                                <div class="panel-body">
                                    {!! $post->excerpt !!}
                                </div>
                                <div class="panel-footer">
                                    <a href="{{ url($post->uri) }}" class="btn btn-primary center-block">Read More <i class="btl bt-caret-right bt-fw"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
