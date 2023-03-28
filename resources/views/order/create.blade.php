<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylegustas.css">
    <title>Create</title>
</head>

<body>
<input list="specialoccasions">

<datalist id="specialoccasions">
  <option value="Basic">
  <option value="Luxe">
  <option value="Kinderfeestje">
  <option value="vrijgezel">
  <option value="business suit">
</datalist>

<a method="post" href="{{ route('order.index') }}">Create order</a>
