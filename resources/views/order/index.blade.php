<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Overview</title>
</head>

<body>
    <h1>Order</h1>
    <ul>
        @foreach ($order as $order)
            <li>
                <a href="{{ route('order.show', $order->id) }}">
                    {{ $order->Name }}
                </a>
            </li>
        @endforeach
        <a href="{{ route('order.create') }}">Create order</a>
    </ul>
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
    @endif
</body>

</html>