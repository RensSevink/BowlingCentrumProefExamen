<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('scoring.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Insert a Name">
        <input type="number" name="points" placeholder="Insert Points">
        <input type="checkbox" name="isactive" value="1">
        <input type="text" name="note" placeholder="Insert a Note">
        <input type="submit" value="Submit">
    </form>
</body>

</html>
