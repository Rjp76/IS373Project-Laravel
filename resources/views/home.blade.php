@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Questions
                        <a class="btn btn-primary float-right" href="{{ route('questions.create') }}">
                            Create a Blog Post
                        </a>

                        <div class="card-body">

                            <div class="card-deck">
                                @forelse($questions as $question)
                                    <div class="col-md-6">
                                    <div class="card flex-md-row mb-4 box-shadow ">
                                        <div class="card-body d-flex flex-column align-items-start">
                                            <h3 class="mb-0">
                                                {{$question->header}}
                                            </h3>
                                            
                                            </div>
                                        <a class="btn btn-primary float-right" href="{{ route('questions.show', ['id' => $question->id]) }}">
                                            View
                                        </a>
                                        </div>

                                    </div>

                                @empty
                                    There are no questions to view, you can create a question.
                                @endforelse


                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="float-right">
                                {{ $questions->links() }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
