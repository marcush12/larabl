@extends('layouts.app')
@section('content')
    <main class="container">
        <div class="container-fluid">
            <article>
                <div class="jumbotron">
                    <h1>{{ $blog->title }}</h1><a style='float:right;' href="{{ action('BlogController@edit', [$blog->id]) }}">Edit</a>
                </div>
                <div class="col-sm-8 col-sm-offset-2">
                    <p>{{ $blog->body }}</p>
                </div>
            </article>
        </div>
    </main>

    <hr>

@endsection
