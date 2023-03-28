<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>{{ $scoring->Name }}</h1>
    <p>{{ $scoring->Points }}</p>
    <p>{{ $scoring->IsActive }}</p>
    <p>{{ $scoring->Note }}</p>
    <p>{{ $scoring->created_at }}</p>
    <p>{{ $scoring->updated_at }}</p>

    <form method="post" action="{{ route('scoring.destroy', $scoring->id) }}">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
    </form>
</body>

</html>
