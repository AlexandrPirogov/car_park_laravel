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
        
            @foreach ($vehicles as $vehicle)
            
            <div class="container">
                <form action="{{ route('vehicles.destroy', $vehicle) }}" method="POST">
                    {{method_field('DELETE')}}
                    {{ csrf_field() }}
                    <button><img class="icons" src="/storage/utilities/delete_icon.png" alt="" /></button> 
                </form>
                <form action="{{ url('/vehicle/edit', $vehicle) }}" method="POST">
                    {{method_field('GET')}}
                    {{ csrf_field() }}
                    <button><img class="icons" src="/storage/utilities/edit_icon.png" alt=""/></button> 
                </form>
            <img class="cars" src="{{ asset('/storage/images/vehicles/'.$vehicle->image) }}" alt=""/>

            <div class="container">
                        <p class="carattrs"><b>Брэнд</b> {{$vehicle->toArray()['brands']['brand']}}</p>
                       <p class="carattrs"><b> Пробег</b> {{$vehicle['mileage']}}</p>
                       <p class="carattrs"><b> Короткий номер</b> {{$vehicle['short_number']}}</p>
                       <p class="carattrs"><b> Дата выпуска</b> {{$vehicle['delivery_date']}}</p>
            </div>
            </div>
            @endforeach
    </div>
</body>
</html>