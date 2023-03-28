<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/rens.css') }}">

</head>

<body>
    <form class="form" action="{{ route('contact.store') }}" method="post">
        @csrf
        <input type="hidden" name="UserId" placeholder="UserId" value="1">
        <th>Email</th>
        <input class="" type="text" name="Email" placeholder="Email" required value="{{ old('Email') }} ">
        <th>Phone Number</th>
        <input type="number" name="Phonenumber" placeholder="Phone Number" required value="{{ old('Phonenumber') }}">
        <input type="hidden" name="IsActive" placeholder="IsActive" value="1">
        <input class="inputsubmit inputsubmit:hover" type="submit" value="Submit">
    </form>

</body>

</html>
