<?php
//validamos datos en servidor
$user ="root@localhost";
$pass ="";
$host = "localhost";

//conectar a BD//

$connection = mysqli_connect($user, $pass, $host);



//verificar conexion

if($connection){
    echo "No se ha podido conectar con el servidor". mysqli_error();
}
else{
    echo "Hemos conectado con el servidor";

}
//indicamos nombre de Db
$datab = "registro";
//inidicamos seleccionar la BD

$db = mysqli_select_db($connection, $datab);

if (!$db){
    echo "NO se podido encontrar la tabla";
}
else{
    echo "tabla Seleccionada";
}
//insertamos datos de registro
$instruccion_SQL = "SELECT - FROM tabla ";
$result = mysql_query($connection, $consulta);
if (!$result){
    echo "No se ha podido relizar la consulta";
}
echo "<table>";
echo "<tr>";