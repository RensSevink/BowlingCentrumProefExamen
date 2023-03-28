<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/rayan.css') }}">
    <title>Overview</title>
</head>

<body>
    <h1>Scoring list</h1>
    <ul>
        @foreach ($scoring as $scoring)
            <li>
                <a href="{{ route('scoring.show', $scoring->id) }}">
                    {{ $scoring->Name }}
                </a>
            </li>
        @endforeach

        <button><a href="{{ route('scoring.create') }}">Create score</a></button>
    </ul>
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
    @endif
</body>

</html>
