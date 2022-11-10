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
    <h1 style="font-size: 150px">Create vehicle</h1>
    <div class="cars">
            <div class="container">
                <form action="/vehicles" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <fieldset style="background: #f6f8ff; border: 2px solid #4238ca;">
                      <legend>Vehicle Information</legend>
                      <input type="hide" name="brand_id" placeholder="Название бренда"><br /><br />
                      <input type="number" name="mileage" placeholder="Пробег"><br /><br />
                      <input type="text" name="short_number" placeholder="Короткий номер"><br /><br />
                      <input type="date" name="delivery_date" placeholder="Дата доставки"><br /><br />
                      <input type="file" name="image" id="inputImage">
                      <button type="submit">Submit</button>
                    </fieldset>
                  
                  </form>
            </div>
    </div>
</body>
</html>