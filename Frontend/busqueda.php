<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articulos</title>
</head>
<body>
    <?php
        $resultado->data_seek(0);
        while($fila = $resultado->fetch_assoc()){
            echo "id = ". $fila['idArticulo']."<br/>";
            echo "idCategoria = ". $fila['idCategoria']."<br/>";
            echo "Nombre = ". $fila['Nombre']."<br/>";
            echo "Descripcion = ". $fila['Descripcion']."<br/>";
            echo "Marca = ". $fila['Marca']."<br/>";
            echo "Precio = ". $fila['Precio']."<br/>";
            echo "Unidad = ". $fila['Unidad']."<br/>";
            echo "Existencias = ". $fila['Existencias']."<br/>";
            echo "Imagen = ". $fila['Imagen']."<br/>";
        }
    ?>
</body>
</html>