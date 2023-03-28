<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Change Order</h1>

    <ul>
        @foreach ($order as $order)
            <li>
                <a href="{{ route('order.show', $order->id) }}">
                    {{ $order->Name }}
                </a>
            </li>
        @endforeach
    </ul>

    <div class="dropdown">
        <button class="dropbtn">Dropdown</button>
            <div class="dropdown-content">
                <a href="#">optie 1</a>
                <a href="#">optie 2</a>
                <a href="#">optie 3</a>
            </div>
            <a href="{{ route('order.create') }}">Change order</a>
    </div>
</body>
</html>