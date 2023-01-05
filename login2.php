<?php


session_start();
$_SESSION ['usuario'] = "Marcelo";
 header("Location: .php");
 
// Obtén el email y la contraseña del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Comprueba si el email y la contraseña son válidos
if ($email == 'marcegon13@gmail.com' && $password == '18143604') {
 
 
  // El inicio de sesión es válido, redirige al usuario a la página de inicio
} else {
  // El inicio de sesión es inválido, muestra un mensaje de error
  echo 'Email o contraseña incorrectos';
}

?>

