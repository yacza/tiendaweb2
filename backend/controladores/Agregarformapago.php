<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar forma de pago</title>
<?php
    $server="localhost";
    $usr="root";
    $pass="";
    $db="supercito";
    
    $con=new mysqli($server,$usr,$pass,$db);

    $nombre=$_POST['nombre'];
    $cuenta=$_POST['cuenta'];
    $vencimineto=$_POST['vencimineto'];
    $opcion=$_POST["opcion"];
    $cvv=$_POST["cvv"];

    do{


    $numero_aleatorio = mt_rand(0,2000000);


    $csql="SELECT * FROM usuario WHERE idUsuario='$numero_aleatorio'" ;
    
    $resultado=$con->query($csql);
    $count=mysqli_num_rows($resultado);
    
    }while($count==1);

    //echo $numero_aleatorio;

    if($con->connect_error){

      echo "La conexión fallo";
    }else{

    // echo "Conexion exitosa";
    }

  $csql2="SELECT * FROM formaspago WHERE nCuenta='$cuenta'" ;

    $resultado2=$con->query($csql2);
    $count2=mysqli_num_rows($resultado2);

    if($count2==1){
    echo "<br /br> Este cuenta ya ha sido registrado en esta plataforma";
    header('Location: ../../Frontend/Agregarformapago.html');

    }else{
    //echo $cuenta;
    $lo="INSERT INTO formaspago(idFormasPago, nombre, nCuenta, fechaVencimiento, opcionPago, CVV) 
    VALUES ('$numero_aleatorio','$nombre','$cuenta','$vencimineto','$opcion','$cvv')";
    $resultado2=$con->query($lo);
    


    header('Location: ../../Frontend/Index2.html');
    }

?>

</html>