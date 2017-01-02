@extends(Theme::getLayout())

@php($categories = categories('blog'))

@section('header')
    <h1 class="page-header">{{ $entry->title }}</h1>
@stop

@section('class', 'blog-post')

@section('subheader')
    <div class="author">
        <img src="{{ $entry->creator->gravatar(100) }}" class="author-image" alt="by {{ $entry->creator->full_name }}">
    </div>
    
    <h4 class="page-subtitle">{{ $entry->created_at->format('F d, Y') }}</h4>
@stop
    
@section('content')
<div class="blog-section content">
    <div class="wrapper">
        <div class="blog-post-content">
            <div class="blog-list">
                <div class="blog-post-inner">
                    {!! $entry->content !!}
                </div>
            </div>
        </div>
        <div class="blog-sidebar">
            <div class="blog-sidebar-inner">
                @if ($categories)
                    <h3 class="sidebar-header">Categories</h3>
                    <ul class="blog-categories">
                        @foreach($categories as $category)
                            <li><a href="{{ url($category->slug) }}">
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
