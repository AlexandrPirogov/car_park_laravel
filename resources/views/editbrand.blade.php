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
    <h1 style="font-size: 150px">Обновление бренда</h1>
    <div class="cars">
            <div class="container">
                <a href="/vehicles/brand/{{$brand->id}}"><img class="brands" src="{{ asset('/storage/images/brands/'.$brand->logo) }}" alt="" /></a>
                <form action="{{ route('brands.update', ['brand' => $brand]) }}" method="POST" >
                    {{method_field('PUT')}}
                    {{ csrf_field() }}
                    <fieldset style="background: #f6f8ff; border: 2px solid #4238ca;">
                      <legend>Brand Information</legend>
                      <label for="brand">Брэнд:</label>
                      <input type="hide" name="brand" placeholder="{{$brand->brand}}" value="{{$brand->brand}}"><br /><br />
                      <label for="type">Тип:</label>
                      <input type="text" name="type" placeholder="Тип" value="{{$brand->type}}"> <br /><br />
                      <label for="bversionand">Версия:</label>
                      <input type="text" name="version" placeholder="Версия" value="{{$brand->version}}"><br/><br />
                      <label for="seats">Кол-во мест:</label>
                      <input type="text" name="seats" placeholder="Количество мест" value="{{$brand->seats}}"><br /><br />
                      <label for="engine_power">Мощность двигателя:</label>
                      <input type="text" name="engine_power" placeholder="Мощность двигателя" value="{{$brand->engine_power}}"><br /><br />
                      <label for="release_date">Дата выпуска:</label>
                      <input type="text" name="release_date" placeholder="Дата выпуска" value="{{$brand->release_date}}"><br /><br />
                      
                      <button type="submit" style="height: 50px"><b>Submit</b></button>
                    </fieldset>
                  
                  </form>
            </div>
    </div>
</body>
</html>