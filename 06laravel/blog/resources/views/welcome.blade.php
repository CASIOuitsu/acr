@extends('layout') <!-- se pasta: layouts/app-->

@section('content')
<h1>My {{ $text }} website! url data: {{ $title }}, {{ $escaped }} {{--!! $escaped !!--}} </h1>

    <ul>
    @foreach ($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
    </ul>

    <?php foreach ($tasks as $task) : ?>
        <li><?= $task; ?></li>
    <?php endforeach; ?>

@endsection