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
    <h1 style="font-size: 150px">Create brand</h1>
    <div class="cars">
            <div class="container">
                <form action="/brands" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <fieldset style="background: #f6f8ff; border: 2px solid #4238ca;">
                      <legend>Brand Information</legend>
                      <input type="hide" name="brand" placeholder="Название бренда"><br /><br />
                      <input type="text" name="type" placeholder="Тип"><br /><br />
                      <input type="text" name="version" placeholder="Версия"><br /><br />
                      <input type="text" name="release_date" placeholder="Дата выпуска"><br /><br />
                      <input type="file" name="image" id="inputImage">
                      <button type="submit">Submit</button>
                    </fieldset>
                  
                  </form>
            </div>
    </div>
</body>
</html>