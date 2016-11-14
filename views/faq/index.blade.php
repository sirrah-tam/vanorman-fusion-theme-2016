@extends(Theme::getLayout())

@section('header')
    FAQ
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-group" id="faq" role="tablist" aria-multiselectable="true">

                    @foreach ($collection->types->where('slug', 'questions')->first()->entries as $question)
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="question-1">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq" href="#answer-{{ $question->id }}" aria-expanded="true" aria-controls="answer-{{ $question->id }}">
                                        {{ $question->title }}
                                    </a>
                                </h4>
                            </div>

                            <div id="answer-{{ $question->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="question-{{ $question->id }}">
                                <div class="panel-body">
                                    {!! $question->answer !!}
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
@stop
