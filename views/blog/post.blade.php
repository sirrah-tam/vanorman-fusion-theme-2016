@extends(Theme::getLayout())

@php($categories = categories('blog'))

<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-centered col-md-10">
                @section('header')
                    {{ $entry->title }}
                @stop
                @section('subheader')
                    by {{ $entry->creator->full_name }}
                @stop
            </div>
        </div>
    </div>


    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <p><i class="btl bt-clock"></i> Posted on {{ $entry->created_at->format('F d, Y') }} at {{ $entry->created_at->format('h:i A') }}</p>

                    <div class="post-content">
                        {!! $entry->content !!}
                    </div>

                </div>

                <div class="col-md-4">
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
</div>
