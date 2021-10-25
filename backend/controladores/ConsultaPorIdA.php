<?php
include("../persistencia/ArticuloDao.php");
$id=$_POST["id"];

$articulodao= new articuloDao();
$conexion=$articulodao->conectar();
$csql="select * from articulo where idArticulo="."$id";
$resultado=$articulodao->consulta($csql);
require_once("../../Frontend/busqueda.php");
?>
