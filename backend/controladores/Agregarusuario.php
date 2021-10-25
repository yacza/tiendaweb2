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
    $nombre=$_POST['nombre'];
    $apellido=$_POST["apellidos"];
    $genero=$_POST["genero"];
    $pago=$_POST["formapago"];
    $domicilio=$_POST["domicilio"];
    
    if($pago=='Tarjeta de debito'){

        $fpago=5;
    }else{

        $fpago=10;
    }

if($con->connect_error){

    echo "La conexión fallo";
}else{

   // echo "Conexion exitosa";
}
do{
    $numero_aleatorio = mt_rand(0,2000000);
$csql="SELECT * FROM usuario WHERE idUsuario='$numero_aleatorio'" ;

$resultado=$con->query($csql);
$count=mysqli_num_rows($resultado);

}while($count==1);


$csql="SELECT * FROM usuario WHERE correo='$correo'" ;

$resultado=$con->query($csql);
$count=mysqli_num_rows($resultado);

if($count==1){
echo "<br /br> Este correo ya ha sido registrado en esta plataforma";
header('Location: ../../Frontend/registrate.html');

}else{
    
    mysqli_query($con,"INSERT INTO usuario  
    (idUsuario,correo,clave,idTipoUsuario,idFormaPago,idDepartamento,nombre,apellidos,genero,domicilio,rfc,puesto,salario)
    VALUES  ('$numero_aleatorio','$correo', '$clave',1,0, 3,' $nombre', '$apellido', '$genero', '$domicilio', 'null','null','null')" );
   header('Location: ../../Frontend/Index2.html');
}

?>

</html>




