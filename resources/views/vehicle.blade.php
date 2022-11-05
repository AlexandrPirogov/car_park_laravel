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
    <h1 style="font-size: 150px">Доступные экземпляры авто</h1>
    <div class="cars">
            <div class="container">
            
            <img src="{{ asset('/storage/'.'images/vehicles/'.$image) }}" alt="" width="100" height="100"/>
            <div class="container">
                       <p class="carattrs"><b> Пробег</b>: {{$mileage}}</p>
                       <p class="carattrs"><b> Короткий номер</b>: {{$short_number}}</p>
            </div>
    </div>
</body>
</html>