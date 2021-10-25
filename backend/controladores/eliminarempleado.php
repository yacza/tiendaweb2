<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
<?php
    $server="localhost";
    $usr="root";
    $pass="";
    $db="supercito";
    
    $con=new mysqli($server,$usr,$pass,$db);
    $correo=$_POST['correo'];




if($con->connect_error){

    echo "La conexión fallo";
}else{

   // echo "Conexion exitosa";
}

$csql="SELECT * FROM usuario WHERE correo='$correo'" ;

$resultado=$con->query($csql);
$count=mysqli_num_rows($resultado);

if($count==1){

    mysqli_query($con,"DELETE FROM usuario WHERE correo='$correo'");
    header('Location: ../../Frontend/Administrador.html');


}else{
    
echo "<br /br> Este empelado no existe";
header('Location: ../../Frontend/eliminarempleado.html');
    

}

?>

</html>