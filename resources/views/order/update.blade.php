<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylegustas.css">
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

    <datalist id="specialoccasions">
        <option type="text" id="optie1" value="Basic">
        <option type="text" id="optie2" value="Luxe">
        <option type="text" id="optie3" value="Kinderfeestje">
        <option type="text" id="optie4" value="vrijgezel">
        <option type="text" id="optie5" value="business suit">
    </datalist>

    <a href="{{ route('edit.create') }}">Change order</a>

</body>
</html>