<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body class="maintext">
    <h1>Vehicles</h1>
    <div class="cars">
            @foreach ($vehicles as $vehicle)
            <div class="container">
            <img src="{{ asset('/storage/'.$vehicle->image) }}" alt="" width="100" height="100"/>

            <div class="container">
                @foreach($vehicle->toArray() as $key => $attr)
                       <p class="carattrs"> {{$key}}: {{$attr}}</p>
                @endforeach

            </div>
            </div>
            @endforeach
    </div>
</body>
</html>