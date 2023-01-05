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
      
  </nav>
  
  <!--form contacto consulta-->
  <p class="text-center fs-2">Contacto</p>
  <div class="container">
    <p>Estimado cliente:
      Le rogamos por favor complete el formulario a fin de hacernos todas las consultas. Nos comunicaremos por nuestro
      canal de email a la brevedad.</p>
    <form action="consulta" method="POST">
      <div class="row d-block w-100 mx-auto mb-4">
        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
          <label for="textInput" class="form-label">Nombre y apellido</label>
          <input type="text" class="form-control" id="inputText" placeholder="Nombre y apellido" required>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
          <label for="emailinput" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail" placeholder="E-mail" required>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
          <label for="Telefono" class="form-label">Telefono</label>
          <input type="text" class="form-control" name="telefono" placeholder="Telefono" required>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
          <label for="textInput" class="form-label">Asunto</label>
          <input type="text" class="form-control" id="inputText" placeholder="Asunto">
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
          <label for="textInput" class="form-label">Consulta</label>
          <textarea rows="6" class="form-control" name="consulta" placeholder="Consulta" required></textarea>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
          <button type="submit" class="btn btn-secondary btn-sm mx-2">Enviar</button>
          <button type="reset" class="btn btn-secondary btn-sm mx-2"> Borrar</button>
        </div>
    </form>
  
  
  </div>
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