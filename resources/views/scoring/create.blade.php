<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/rayan.css') }}">
    <title>Create field</title>
</head>

<body>
    <form action="{{ route('scoring.store') }}" method="post">
        @csrf
        <input type="text" name="Name" placeholder="Insert a Name">
        @error('Name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="hidden" name="ReservationId" placeholder="ReservationId" value="1">
        <input type="number" name="Points" placeholder="Insert Points">
        @error('Points')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="checkbox" name="IsActive" value="1">
        <input type="text" name="Note" placeholder="Insert a Note">
        <input type="submit" value="Submit">
    </form>
</body>

</html>
