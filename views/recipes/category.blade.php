@extends(Theme::getLayout())

@section('header')
    Recipes
@stop

@section('subheader')
    {{ $category->title }}
@stop

@php($categories = categories('recipes'))
@php($recipes = $entries->paginate(5, ['*'], 'page', Request::get('page')))

@section('content')
    <div class="wrapper">
        <div class="row">
            <div class="col-md-9">
                <p class="lead text-center">
                    {{ strip_tags($category->description) }}
                </p>

                <div class="list-group">
                    @foreach ($recipes as $recipe)
                        <a href="{{ url($recipe->uri) }}" class="list-group-item">
                            <h4 class="list-group-item-heading"><i class="fa fa-cutlery fa-fw"></i> {{ $recipe->title }}</h4>
                            <p class="list-group-item-text"><small>Contributed by <b>{{ $recipe->creator->full_name }}</b> {{ $recipe->updated_at->diffForHumans() }}</small></p>
                        </a>
                    @endforeach
                </div>

                <div class="text-center">
                    {{ $recipes->links() }}
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search recipes...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>

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
            </div>
        </div>
    </div>
@stop
