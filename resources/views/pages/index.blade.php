@extends('layout.app')

@yield('page-title', 'homepage')

@section('main-content')
    <ul>
        @foreach ($movies as $movie)
            <article>
                <div class="card w-100">
                    <div class="card-body">
                        Date: {{$movie->date}}
                        Nationality: {{$movie->nationality}}
                        Original title: {{$movie->original_title}}
                        Title: {{$movie->title}}
                        Vote: {{$movie->vote}}
                    </div>
                </div>
            </article>
        @endforeach
    </ul>
@endsection
