<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Overview</title>
</head>

<body>
    <div class="dropdown">
        <button class="dropbtn">Dropdown</button>
            <div class="dropdown-content">
                <a href="#">optie 1</a>
                <a href="#">optie 2</a>
                <a href="#">optie 3</a>
            </div>
            <a href="{{ route('order.create') }}">Create order</a>
    </div>