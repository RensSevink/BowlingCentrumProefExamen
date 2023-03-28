<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Overview</title>
</head>

<body style="background-color: rgb(233, 245, 7)">
    <h1 style="margin-left: 60rem">Scoring list</h1>
    <ul>
        @foreach ($scoring as $scoring)
            <li>
                <a href="{{ route('scoring.show', $scoring->id) }}">
                    {{ $scoring->Name }}
                </a>
            </li>
        @endforeach

        <button style="background-color: rgb(6, 237, 56)"><a href="{{ route('scoring.create') }}">Create
                score</a></button>
    </ul>
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
    @endif
</body>

</html>
