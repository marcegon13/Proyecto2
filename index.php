<?php
session_start();

if(!isset ($_SESSION['usuario'])){
  header ("Location: index.php");
 }else 
  $usuario = $_SESSION['usuario'];
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
        <form action="login2.php" method="post">
        <input type="text" name="email" placeholder="Email"><br><br>
        <input type="password" name="password" placeholder="Contraseña"> <br><br>
        <input type="submit" class="btn btn-secondary btn-sm d-sm-inline-flex mx-2" value="Iniciar sesión">
        
      </form>
    </div>
  </nav>
  
  
 <p class="text-center fs-2">Destinos</p>
  <!--galeria1-->
  
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
        aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
        aria-label="Slide 6"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
        aria-label="Slide 1"></button>
    </div>
    <div class="carousel-inner w-75 m-auto">
      <div class="carousel-item active">
        <img src="img/galeria_index/Berlin.jpg" class="d-block w-100" alt="foto">
      </div>
      <div class="carousel-item">
        <img src="img/galeria_index/Londres.jpg" class="d-block w-100" alt="foto">
      </div>
      <div class="carousel-item">
        <img src="img/galeria_index/foro-romano-roma_6a11fe2b.jpg" class="d-block w-100" alt="foto">
      </div>
      <div class="carousel-item">
        <img src="img/galeria_index/Playa_del_Carmen.jpg" class="d-block w-100" alt="foto">
      </div>
      <div class="carousel-item">
        <img src="img/galeria_index/Paris.jpg" class="d-block w-100" alt="foto">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
  <!--publicidad-->
  <div class="row w-75 m-auto justify-content-around mt-3 mb-3">
    <div class="col-md-6 mb-2 bg-warning">
      <p>PROMO 1</p>
    </div>
  
    <div class="col-md-4 bg-warning">
      <p>PROMO 2</p>
    </div>
  
  </div>
  
  
  
  <p class="text-center fs-2">Hoteles</p>
  <!--galeria 2-->
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner w-75 m-auto mb-2">
      <div class="carousel-item active">
        <img src="img/galeria-hoteles/Bellevue Syrene, Italia.jpg" class="d-block w-100" alt="img1">
      </div>
      <div class="carousel-item">
        <img src="img/galeria-hoteles/Hotel Adlon Kempinski Berlin.jpg" class="d-block w-100" alt="img2">
      </div>
      <div class="carousel-item">
        <img src="img/galeria-hoteles/Le Palais Art Hotel Prague, República Checa.jpg" class="d-block w-100" alt="img3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
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
  