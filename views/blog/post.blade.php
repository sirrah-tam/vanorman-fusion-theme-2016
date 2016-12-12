@extends(Theme::getLayout())

@php($categories = categories('blog'))

@section('header')
    {{ $entry->title }}
@stop

@section('class', 'blog-post')

@section('subheader')
    <hr class="small">
    <p>
        <small>Posted by {{ $entry->creator->full_name }}</small><br>
        <small><i class="btl bt-clock"></i> Posted on {{ $entry->created_at->format('F d, Y') }} at {{ $entry->created_at->format('h:i A') }}</small>
    </p>
@stop
    
@section('content')
    <div class="content">
        <div class="wrapper">
            <div class="blog-list">
                <div class="blog-post">

                    <div class="post-content">
                        {!! $entry->content !!}
                    </div>
                </div>
            </div>
            <div class="wrapper">
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
