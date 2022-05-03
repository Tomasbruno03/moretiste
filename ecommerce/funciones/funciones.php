<?php
header("Content-type/json");
include("conexion.php");
$productos=mysqli_query($conexion,"SELECT * FROM `productos` WHERE 1");
function modelo_prod($productos){
    $data= $productos->fetch_all(MYSQLI_ASSOC);
    echo json_encode($data);
};