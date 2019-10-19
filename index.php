<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="librerias/awesomplete-gh-pages/awesomplete.css">
</head>
<body>
<datalist id="mylist">
    <option>Morelos</option>
    <option>San Luis Potosí</option>
    <option>México</option>
    <option>Tamaulipas</option>
    <option>Hidalgo</option>
    <option>Queretaro</option>
    <option>Nuevo León</option>
</datalist>
  <div class="container">
      <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
              <br><br><br><br><br><br><br><br>
              <input type="search" id="txtBusc" class="form-control awesomplete" list="mylist" placeholder="Estado...">
              <button onclick="buscar()">Buscar</button>
          </div>
          <div class="col-sm-4"></div>
      </div>
  </div>
  <script src="librerias/jquery-3.2.1.min.js"></script>
  <script>
    function buscar(){
        var txt = document.getElementById('txtBusc').value;
        if (txt == "Morelos"){
            window.location="morelos.php";
        }
    }

  </script>
</body>
</html>