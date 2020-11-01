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
         <a href="{{route('emoji.show', $item->id)}}">{{$item->character}}</a>
        </li>
        @endforeach
    </ul>
</body>
</html>