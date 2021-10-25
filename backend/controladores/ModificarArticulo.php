<?php
include("../persistencia/ArticuloDao.php");

//--Recuperar datos del formulario

$id = $_POST["id"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$existencias = $_POST["existencias"];

//--Consulta la base de datos
$articulodao = new articuloDao();
$mysqli = $articulodao->conectar();

//esta linea es innecesaria debido a que la variable ya llama al proceso de conectar

$csql = "UPDATE `articulo` set `descripcion`='$descripcion', `precio`='$precio', `existencias`='$existencias' where `idArticulo`='$id'";

$resultado=$articulodao->consulta($csql);

if ($resultado === TRUE) {
    echo "Articulo modificado correctamente";
  } else {
    echo "Error: " . $csql . "<br>";
  }
?>