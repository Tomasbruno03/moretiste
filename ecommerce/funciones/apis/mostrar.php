<?php
// header("Content-type:application/json");


$conexion= mysqli_connect("localhost", "root","","ecommerce");
@$valor=$_POST["valor"];
@$nom_prod=$_POST["nom_prod"];
$result= mysqli_query($conexion,"SELECT * FROM productos WHERE 1");
$dato = $result->fetch_all(MYSQLI_ASSOC);


    if($valor){
        $result= mysqli_query($conexion,"SELECT * FROM productos");
        $dato = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($dato);   
    }
    if($nom_prod){
        $result=mysqli_query($conexion,"SELECT * FROM `productos` WHERE nombre_prod='$nom_prod'");
        $dato_nom= $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($dato_nom);
        }
    






?>