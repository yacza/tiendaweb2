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
    $cuenta=$_POST['cuenta'];




if($con->connect_error){

    echo "La conexión fallo";
}else{

   // echo "Conexion exitosa";
}

$csql="SELECT * FROM formaspago WHERE ncuenta='$cuenta'" ;

$resultado=$con->query($csql);
$count=mysqli_num_rows($resultado);

if($count==1){

    mysqli_query($con,"DELETE FROM formaspago WHERE nCuenta='$cuenta'");
    header('Location: ../../Frontend/Index2.html');


}else{
    
echo "<br /br> Esta forma de pago no existe";
header('Location: ../../Frontend/eliminarPago.html');
    

}

?>

</html>