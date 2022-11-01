<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Vehicle, {{$mileage}}, {{$short_number}}</h1>
    <div>
        <p>
            <img src="{{ asset('/storage/'.$image) }}" alt="" width="200" height="200"/>
        </p>
    </div>
</body>
</html>