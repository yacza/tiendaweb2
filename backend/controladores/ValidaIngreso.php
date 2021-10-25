
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
    $clave=$_POST['password'];

if($con->connect_error){

   // echo "La conexión fallo";
}else{

   // echo "Conexion exitosa";
}

$csql="SELECT * FROM usuario WHERE correo='$correo' AND clave='$clave'" ;

$resultado=$con->query($csql);
$count=mysqli_num_rows($resultado);
$info_campo = $resultado->fetch_assoc();


if($count==1 and $resultado and $info_campo['idTipoUsuario']==1){
//echo "<br /br> Bienvenido";
header('Location: ../../Frontend/Administrador.html');
//include("../../Frontend/Index2.html");
}else if ($count==1){
    header('Location: ../../Frontend/Index2.html');
}

?>

</html>
