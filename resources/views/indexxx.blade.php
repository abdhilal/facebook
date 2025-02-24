<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('search.test')}}" method="POST">
    @csrf
    <input type="text" name="id">
    <input type="submit">

   <h1>{{session('sec')}}</h1>
</form>
</body>
</html>
