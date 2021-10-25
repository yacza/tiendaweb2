<?php
include("../persistencia/ArticuloDao.php");

$id = $_POST["id"];

$articulodao = new articuloDao();
$mysqli = $articulodao->conectar();
$csql = "DELETE FROM `articulo` WHERE `articulo`.`idArticulo` = '$id'";
$resultado = $articulodao->consulta($csql);

if ($resultado === TRUE) {
    echo "Articulo eliminado correctamente";
  } else {
    echo "Error: " . $csql . "<br>";
  }
?>