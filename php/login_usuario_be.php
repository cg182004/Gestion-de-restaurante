<?php

include'conexion_be.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$validad_login = mysqli_query($conexion,"SELECT * FROM usuarios where usuario='$usuario'
and contrasena='$contrasena'");

if(mysqli_num_rows($validad_login)>0){ 
    header("location: bienvenida.php");

}else{
    echo'
    <script>alert("Usuario no existe, por favor verifique los datos introducidos");
    window.location = "bienvenida.php";
    
    </script>
';
 exit;
}
?>