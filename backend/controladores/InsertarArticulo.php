<?php
include("../persistencia/ArticuloDao.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$marca =$_POST["marca"];
$precio =$_POST["precio"];
$unidad =$_POST["unidad"];
$existencias =$_POST["existencias"];

$articulodao = new articuloDao();
$mysqli = $articulodao->conectar();
$csql = "insert into `articulo` (`idArticulo`, `idCategoria`, `Nombre`, `Descripcion`, `Marca`, `Precio`, `Unidad`, `Existencias`, `Imagen`) 
values ('$id','1','$nombre', '$descripcion', '$marca', '$precio', '$unidad', '$existencias', 'NULL')";
$resultado = $articulodao->consulta($csql);

if ($resultado === TRUE) {
    echo "Articulo agregado correctamente";
  } else {
    echo "Error: " . $csql . "<br>";
  }
?>