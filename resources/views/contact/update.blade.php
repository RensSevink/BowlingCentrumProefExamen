<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('contact.update', ['contact' => $contact->id]) }}" method="post">
        @method('PUT')
        @csrf
        <input type="number" name="UserId" placeholder="UserId" value="{{ old('UserId', $contact->UserId) }}">
        <th>Email</th>
        <input type="text" name="Email" placeholder="Email" required value="{{ old('Email', $contact->Email) }}">
        <th>Phone Number</th>
        <input type="number" name="Phonenumber" placeholder="Phone Number" required
            value="{{ old('Phonenumber', $contact->Phonenumber) }}">
        <input type="hidden" name="IsActive" placeholder="IsActive" value="1">
        <input type="submit" value="Submit">
    </form>
</body>

</html>
