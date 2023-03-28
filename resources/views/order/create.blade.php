<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>

<body>
    <div class="dropdown" action="{{ route('scoring.store') }}" method="post">
        @csrf
        <button class="dropbtn">Dropdown</button>
            <div class="dropdown-content">
                <a type="text" name="optie1">optie 1</a>
                <a type="text" name="optie2">optie 2</a>
                <a type="text" name="optie3">optie 3</a>
            </div>
            <a href="{{ route('order.create') }}">Create order</a>
    </div>