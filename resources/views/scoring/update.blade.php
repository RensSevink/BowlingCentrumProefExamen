<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
</head>

<body style="background-color: rgb(233, 245, 7)">
    <form action="{{ route('scoring.update', ['scoring' => $scoring->id]) }}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="Name" placeholder="Insert a Name" required>
        @error('Name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="hidden" name="ReservationId" placeholder="ReservationId" value="1">
        <input type="number" name="Points" placeholder="Insert Points" required>
        @error('Points')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="checkbox" name="IsActive" value="1">
        <input type="text" name="Note" placeholder="Insert a Note">
        <input type="submit" value="Submit" style="background-color: rgb(6, 237, 56)">
    </form>
</body>

</html>
