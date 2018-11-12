<!doctype html>
<html>
<head>
    <title></title>

</head>

<body>
    <h1 class="title">Projects</h1>

    <ul>
        @foreach ($projects as $project)
            <li><a href="/projects/{{ $project->id }}/edit">{{ $project->title }}</a></li>
        @endforeach
    </ul>

</body>
</html>