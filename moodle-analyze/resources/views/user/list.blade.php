<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    @foreach($users as $user)
        @if (count($user->groups) > 0 )
        <li>{{ $user->firstname }} {{ $user->lastname }}
        <ul>
            @foreach($user->groups as $group)
                <li> {{$group->name}}</li>
            @endforeach
        </ul>
        </li>
        @endif
    @endforeach
</ul>
</body>
</html>
