@extends('layouts.app')
@section('content')
@include('partials.meta-dynamic')
    <main class="container">
        <article>
            <div class="container-fluid">

                    <div class='col-sm-12'>
                        @if($blog->photo)
                                <img style='margin=0 auto; padding-bottom:20px;' class='img-responsive featured_image' src="/images/{{ $blog->photo ? $blog->photo->photo : '' }}" alt="{{ str_limit($blog->title, 50) }}">
                        @endif
                    </div>
                    <div class="jumbotron">
                        <h1>{{ $blog->title }}</h1><a style='float:right;' href="{{ action('BlogController@edit', [$blog->id]) }}">Edit</a>
                    </div>
                    <div class="col-sm-8 col-sm-offset-2">
                        {!! $blog->body !!}
                        @foreach($blog->category as $category)
                            <p><a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a></p>
                        @endforeach
                    </div>

            </div>
        </article>
    </main>

    <hr>

@endsection
