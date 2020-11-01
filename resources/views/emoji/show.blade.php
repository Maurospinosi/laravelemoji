<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Emoji(show)</title>
</head>
<body>
    <ul>
        <li>{{$emoji->slug}}</li>
        <li>{{$emoji->character}}</li>
        <li>{{$emoji->unicodeName}}</li>
        <li>{{$emoji->codePoint}}</li>
        <li>{{$emoji->group}}</li>
        <li>{{$emoji->subGroup}}</li>
    </ul>
<a href="{{route('emoji.index')}}">Turn to list</a>
</body>
</html>