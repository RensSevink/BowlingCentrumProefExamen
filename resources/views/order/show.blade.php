<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>{{ $order->Food }}</p>
    <p>{{ $order->Drink }}</p>
    <p>{{ $order->Price}}</p>
    <p>{{ $order->Note}}</p>
    <p>{{ $order->created_at}}</p>
    <p>{{ $order->updated_at}}</p>
    <p>{{ $specialoccasion->TypeOfOccasion}}</p>
    <p>{{ $specialoccasion->Note}}</p>
    <p>{{ $specialoccasion->created_at}}</p>
    <p>{{ $specialoccasion->updated_at}}</p>

    <form method="post" action="{{ route('order.destroy', $order->id) }}">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
    </form>
    <a href="{{ route('order.edit', ['order' => $order->id]) }}">edit</a>
</body>

</html>