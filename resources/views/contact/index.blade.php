<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Overview</title>
</head>

<body>
    <nav></nav>
    <div class="container">
        @if (session()->has('success'))
            <div class="">
                <ul>
                    <li>{{ session()->get('success') }}</li>
                </ul>
            </div>
        @endif
        <table>
            <thead>
                <tr>
                    <th>UserId</th>
                    <th>Email</th>
                    <th>Phonenumber</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $contact)
                    <tr>
                        <td>{{ $contact->UserId }}</td>
                        <td>{{ $contact->Email }}</td>
                        <td>{{ $contact->Phonenumber }}</td>
                        <td>{{ $contact->Note }}</td>
                        <td>
                            <a href="{{ route('contact.edit', ['contact' => $contact->id]) }}">Edit</a>
                        </td>

                        <td>
                            <form method="post" action="{{ route('contact.destroy', $contact->id) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- link to add new contact --}}
        <a href="{{ route('contact.create') }}">Add new contact</a>
    </div>
</body>

</html>
