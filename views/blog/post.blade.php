@extends(Theme::getLayout())

@php($categories = categories('blog'))

@section('header')
    {{ $entry->title }}
@stop

@section('class', 'blog-post')

@section('subheader')
    <hr class="small">
    <img src="{{ $entry->creator->gravatar(200) }}" class="author-image"> 
    <p>
        Posted by {{ $entry->creator->full_name }}
        <br>
        <div class="date">
            <small>
                {{ $entry->created_at->format('M') }}
                <br>
                {{ $entry->created_at->format('d') }}
            </small>
        </div>
    </p>
@stop
    
@section('content')
<div class="blog-section content">
    <div class="wrapper-fluid">
        <div class="sidebar-cont">
            <div class="blog-list">
                <div class="blog-post-content">
                    <div class="blog-post-inner">
                        {!! $entry->content !!}
                    </div>
                </div>
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
@stop
