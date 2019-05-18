@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Answer</div>
                    <div class="card-body">
                        {{$answer->body}}
                    </div>
                    <div class="card-footer">
                        {{ Form::open(['method'  => 'DELETE', 'route' => ['answer.destroy', $question, $answer->id]])}}
                        <button class="btn btn-danger float-right mr-2" value="submit" type="submit" id="submit">Delete
                        </button>
                        {!! Form::close() !!}
                        <a class="btn btn-primary float-right mr-2" href="{{ route('answer.edit',['question_id'=> $question, 'answer_id'=> $answer->id, ])}}">
                            Edit Answer
                        </a>
                        <a class="btn btn-success float-right mr-2" href="{{ route('reply.create', ['answer_id'=> $answer->id])}}">
                            Reply
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">Replies</div>
                    <div class="card-body">

                            @forelse($answer->reply as $reply)
                                <div class="card m-3">
                                    <div class="card-body">{{$reply->body}}</div>
                                </div>
                            @empty
                                <div class="card">

                                    <div class="card-body"> Be the first one to reply!</div>
                                </div>
                            @endforelse
                    </div>
                    <div class="card-footer">

                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
