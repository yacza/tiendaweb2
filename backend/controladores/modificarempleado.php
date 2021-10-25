<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar empleado</title>
<?php
include("../persistencia/ArticuloDao.php");
    
    $correo=$_POST['correo'];
    $clave=$_POST['password'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST["apellidos"];
    $genero=$_POST["genero"];
    $rfc=$_POST["rfc"];
    $puesto=$_POST["puesto"];
    $salario=$_POST["sueldo"];
    $domicilio=$_POST["domicilio"];
    $departamento=$_POST["departamento"];


    if ($departamento=='Ventas'){
        $idDep=1;

    }else if ($departamento=='Compras'){
        $idDep=5;

    }else if ($departamento=='Aseo'){
        $idDep=2;
    }
    $articulodao = new articuloDao();
    $mysqli = $articulodao->conectar();

$csql="SELECT * FROM usuario WHERE correo='$correo'" ;

$resultado=$articulodao->consulta($csql);
$count=mysqli_num_rows($resultado);

if($count==0){
echo "<br /br> Este correo no se encuntra registrado en esta plataforma";
header('Location: ../../Frontend/modificarempleado.html');

}else{
    $csql2="UPDATE `usuario` SET `correo`='$correo',`clave`='$clave',`idFormaPago`='5',`idDepartamento`='$idDep',`nombre`='$nombre',`apellidos`='$apellido',`genero`='$genero',`domicilio`='$domicilio',`rfc`='$rfc',`puesto`='$puesto',`salario`='$salario' WHERE `correo`='$correo'" ;
    $resultado2 = $articulodao->consulta($csql2);
    
  
 if($resultado2==True){
  header('Location: ../../Frontend/Administrador.html');
  }else{
  echo "<br /br> Ocurrio un error en la modificación";
   }

}

?>

</html>