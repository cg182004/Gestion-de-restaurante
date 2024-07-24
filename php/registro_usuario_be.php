<?php 

    
include 'conexion_be.php';

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarios(nombre, correo, usuario, contrasena)
               Values('$nombre', '$correo', '$usuario', '$contrasena')";

$verificar_correo=mysqli_query($conexion,"select* from usuarios where='$correo'");

if(mysqli_num_rows($verificar_correo)> 0){
echo'
 <scritp>
    Alert("Este correo ya esta registrado, intentalo con otro diferente");
    window.location="./index.php";
    </script>
  ';
   exit();
}
           $ejecutar = mysqli_query($conexion, $query);


    if($ejecutar) {
     echo '  <script>
             alert("Usuario almacenado exitosamente");
             window.location.href = "index.php";
          </script>';
          
    }else {
        echo '<script>
                 alert("Hubo un error al almacenar el usuario");
                 window.location.href = "index.php";
              </script>';
    }

    mysqli_close($conexion);
?>