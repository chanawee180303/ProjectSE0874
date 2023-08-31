<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($role as $roles)
        <p>Type: {{$roles['type']}}</p>
        <ul>
            @foreach($roles['name'] as $name)
                <li>{{$name}}</li>
                <li>{{$name}}</li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>