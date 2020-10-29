<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Emoji</title>
</head>
<body>
    <ul>
        @foreach ($emoji as $item)
        <li>
            <div>{{$item->slug}}</div>
            <div>{{$item->character}}</div>
            <div>{{$item->unicodeName}}</div>
            <div>{{$item->codePoint}}</div>
            <div>{{$item->group}}</div>
            <div>{{$item->subGroup}}</div>
        </li>
        @endforeach
    </ul>
</body>
</html>