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
    <h1 style="font-size: 150px">Брэнды и модели</h1>
    <div class="cars">
            @foreach ($brands as $brand)
            
            <div class="container">
                <form action="{{ route('brands.destroy', $brand) }}" method="POST">
                    {{method_field('DELETE')}}
                    {{ csrf_field() }}
                    <button><img class="icons" src="/storage/utilities/delete_icon.png" alt="" /></button> 
                </form>
                <form action="{{ url('/brands/edit', $brand) }}" method="POST">
                    {{method_field('GET')}}
                    {{ csrf_field() }}
                    <button><img class="icons" src="/storage/utilities/edit_icon.png" alt=""/></button> 
                </form>
            <a href="/vehicles/brand/{{$brand->id}}"><img class="brands" src="{{ asset('/storage/images/brands/'.$brand->logo) }}" alt="" /></a>

            <div class="container">
                       <p class="carattrs"><b> Брэнд: </b>: {{$brand['brand']}}</p>
                       <p class="carattrs"><b> Версия: </b>: {{$brand['version']}}</p>
                       <p class="carattrs"><b> Тип: </b>: {{$brand['type']}}</p>
                       <p class="carattrs"><b> Мест для пассажиров</b>: {{$brand['seats']}}</p>
                       <p class="carattrs"><b> Мощность двигателя</b>: {{$brand['engine_power']}} Л.С.</p>
                       <p class="carattrs"><b> Дата выпуска: </b>: {{$brand['release_date']}}</p>
            </div>
            </div>
            @endforeach
    </div>
</body>
</html>