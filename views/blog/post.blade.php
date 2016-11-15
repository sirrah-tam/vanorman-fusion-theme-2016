@extends(Theme::getLayout())

@php($categories = categories('blog'))

@section('header')
    {{ $entry->title }}
@stop
@section('subheader')
    <hr class="small">
    <i class="btl bt-user bt-fw"></i> {{ $entry->creator->full_name }}
@stop
    
@section('content')
    <div class="content">
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
                    <div class="list-group">
                      <div class="list-group-item"><i class="btl bt-home bt-fw"></i> Home</div>
                      <div class="list-group-item"><i class="btl bt-book bt-fw"></i> Library</div>
                      <div class="list-group-item"><i class="btl bt-pencil bt-fw"></i> Applications</div>
                      <div class="list-group-item"><i class="btl bt-gear bt-fw"></i> Settings</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
