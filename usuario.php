<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Hola Mundo Travel</title>
</head>

<body>

  <!--menu-->

  <nav class="navbar navbar-expand-lg navbar-dark bg-black mb-4">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar d-flex mx-auto list-unstyled">
          <li class="nav-item p-4">
            <a class="nav-link text-light" href="index.php">Inicio</a>
          </li>
          <li class="nav-item p-4">
            <a class="nav-link text-light" href="promociones.php">Promociones</a>
          </li>
          <li class="nav-item p-4">
            <a class="nav-link text-light" href="destinos.php">Destinos</a>
          </li>
          <li class="nav-item p-4">
            <a class="nav-link text-light" href="contacto.php">Contacto</a>
          </li>
        </ul>
      </div>
      
    </div>
  </nav>
  <!--formulario-->
  
  <div class="container mt-2">
  
    <form action="Registro" method="post" class="row w-75 g-3 mt-3 mb-3 mx-auto ">
  
      <div class="col-xl-6 col-md-10 col-sm-12">
       
        <input type="email" class="form-control" id="inputEmail" placeholder="Escriba su email" required>
      </div>
  
      <div class="col-xl-6 col-md-10 col-sm-12">
        
        <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña"required>
      </div>
  
      <div class="col-xl-6 col-md-10 col-sm-12">
        
        <input type="text" class="form-control" id="inputAddress" placeholder="Direccion" required>
      </div>
  
      <div class="col-xl-6 col-md-10 col-sm-12">
       
        <input type="text" class="form-control" id="InputCity" placeholder="Ciudad" required>
      </div>

      <div class="col-xl-2 col-md-3 col-sm-4">
        <input type="text" class="form-control" id="InpuCodArea" placeholder="Cod. Area" required>
      </div>
      <div class="col-xl-4 col-md-18 col-sm-10">  
        <input type="text" class="form-control" id="InputTelefono" placeholder="Telefono" required>
      </div>
  
      <div class="col-xl-6 col-md-10 col-sm-12">
       
        <input type="text" class="form-control" id="CountryInput" placeholder="Pais" required>
      </div>
  
      <div class="col-xl-6 col-md-10 col-sm-12">
        <div class="form-check">
          <input type="checkbox" id="checkTerms" class="form-check-input">
          <label for="checkTerms" class="form-check-label">Acepto los terminos y condiciones</label>
        </div>
  
        <div class="col-12">
          <button type="submit" class="btn btn-secondary btn-sm">Registrate</button>
        </div>
      </div>
    </form>
  </div>
  
  
  
  <!--footer-->
  <div class="container-fluid d-flex bg-black p-2 m-auto justify-content-around mb-2">
    <div class="col-4 pt-4"><img src="img/logo.png" alt="logo" width="150"></div>
    <div class="row-footer bg-black">
      <div class="col d-block">
        <p class="text-center text-white ">Direccion: Avenida Maipu 1700. Vicente Lopez.</p>
        <p class="text-center text-white ">Email: lanubedesarrolloweb@lanube.com </p>
      </div>
      <div class="col-4 d-flex m-5 ">
        <img src="img/redeF.png" alt="redes">
        <img src="img/redesW.png" alt="redes">
        <img src="img/redeI.png" alt="redes">
        <img src="img/redeL.png" alt="redes">
      </div>
    </div>
  </div>
  <!--footer2-->
  <div class="container w-100 m-auto">
    <div class="row ">
      <div class="col m-auto text-center">
        <img src="img/mini-logo.jpg" with="35px" heigth="35px" class="img-fluid"> Design by www.lanubedesarrolloweb.com
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  
  </body>
  
  </html>