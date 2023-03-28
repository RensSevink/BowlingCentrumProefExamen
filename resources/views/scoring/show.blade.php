<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Specific view</title>
</head>

<body style="background-color: rgb(233, 245, 7)">
    <h1>{{ $scoring->Name }}</h1>
    <p>{{ $scoring->Points }}</p>
    <p>{{ $scoring->IsActive }}</p>
    <p>{{ $scoring->Note }}</p>
    <p>{{ $scoring->created_at }}</p>
    <p>{{ $scoring->updated_at }}</p>

    <form method="post" action="{{ route('scoring.destroy', $scoring->id) }}">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete" style="background-color: rgb(255, 4, 4)">
    </form>
    <button style="background-color: rgb(6, 237, 56)"> <a
            href="{{ route('scoring.edit', ['scoring' => $scoring->id]) }}">Edit</a></button>
</body>

</html>
