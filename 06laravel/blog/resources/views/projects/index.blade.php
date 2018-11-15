@extends('layout')

@section('content')
    <h1 class="title">Projects</h1>

    <ul>
        @foreach ($projects as $project)
            <li><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></li>
        @endforeach
    </ul>

    <a href="/projects/create" class="button">add new</a>

    <a href="/projects/first" class="button">First</a>

    <a href="/projects/last" class="button">Last</a>

@endsection
