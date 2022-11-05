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
    <h1 style="font-size: 150px">Brand</h1>
    <div class="cars">
            <div class="container">
            
            <img class="brands" src="{{ asset('/storage/'.'images/brands/'.$logo) }}" alt="" width="100" height="100"/>
            <div class="container">
                       <p class="carattrs"><b> Брэнд</b>: {{$brand}}</p>
                       <p class="carattrs"><b> Версия</b>: {{$version}}</p>
                       <p class="carattrs"><b> Тип</b>: {{$type}}</p>
                       <p class="carattrs"><b> Мест для пассажиров</b>: {{$seats}}</p>
                       <p class="carattrs"><b> Мощность двигателя</b>: {{$engine_power}} Л.С.</p>
                       <p class="carattrs"><b> Дата выпуска</b>: {{$release_date}}</p>
            </div>
            </div>
    </div>
</body>
</html>