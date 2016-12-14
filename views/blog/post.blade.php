@extends(Theme::getLayout())

@php($categories = categories('blog'))

@section('header')
    <h1 class="page-header">{{ $entry->title }}</h1>
@stop

@section('class', 'blog-post')

@section('subheader')
    <div class="author">
        <img src="{{ $entry->creator->gravatar(200) }}" class="author-image"><div class="author-name">by {{ $entry->creator->full_name }}</div>
    </div>
    <div class="page-subtitle">
        <div class="date">
           <small>
                <i class="btl bt-calendar bt-lg"></i>
                <br>
                {{ $entry->created_at->format('M d') }}
            </small>
        </div>
    </div>
@stop
    
@section('content')
<div class="blog-section content">
    <div class="wrapper">
        <div class="sidebar-cont">
            <div class="blog-list">
                <div class="blog-post-content">
                    <div class="blog-post-inner">
                        {!! $entry->content !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-sidebar">
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
@stop
