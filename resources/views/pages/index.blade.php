@extends('layout.app')

@yield('page-title', 'homepage')

@section('main-content')
    <ul>
        @foreach ($movies as $movie)
            <li>
                Date: {{$movie->date}}
                Nationality: {{$movie->nationality}}
                Original title: {{$movie->original_title}}
                Title: {{$movie->title}}
                Vote: {{$movie->vote}}
            </li>
        @endforeach
    </ul>
@endsection
