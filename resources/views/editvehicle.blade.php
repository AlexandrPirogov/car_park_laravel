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
    <h1 style="font-size: 150px">Vehicle update</h1>
    <div class="cars">
            <div class="container">
                <img class="cars" src="{{ asset('/storage/images/vehicles/'.$vehicle->image) }}" alt="" />
                <form action="{{ route('vehicles.update', ['vehicle' => $vehicle]) }}" method="POST" >
                    {{method_field('PUT')}}
                    {{ csrf_field() }}
                    <fieldset style="background: #f6f8ff; border: 2px solid #4238ca;">
                      <legend>Vehicle Information</legend>
                      <label for="brand">Брэнд:</label>
                      <select name="brand" id="">
                          @foreach ($brands as $brand)
                              <option value="{{$brand}}">{{$brand->brand}}</option>
                          @endforeach
                      </select><br>
                      <label for="mileage">Пробег:</label>
                      <input type="hide" name="mileage" placeholder="{{$vehicle->mileage}}" value="{{$vehicle->mileage}}"><br /><br />
                      <label for="short_number">Короткий номер:</label>
                      <input type="hide" name="short_number" placeholder="{{$vehicle->short_number}}" value="{{$vehicle->short_number}}"><br /><br />
                      <label for="delivery_date">Дата доставки:</label>
                      <input type="hide" name="delivery_date" placeholder="{{$vehicle->delivery_date}}" value="{{$vehicle->delivery_date}}"><br /><br />
                      
                      <button type="submit" style="height: 50px"><b>Submit</b></button>
                    </fieldset>
                  
                  </form>
            </div>
    </div>
</body>
</html>