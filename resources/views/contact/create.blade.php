<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('contact.store') }}" method="post">
        @csrf
        <input type="hidden" name="UserId" placeholder="UserId" value="1">
        <input type="text" name="Email" placeholder="Email">
        <input type="number" name="Phonenumber" placeholder="Phone Number">
        <input type="hidden" name="IsActive" placeholder="IsActive" value="1">
        <input type="submit" value="Submit">
    </form>
</body>

</html>
