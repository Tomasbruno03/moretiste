<?php
$conexion= mysqli_connect("localhost", "root","","ecommerce");
extract($_POST);
// variable que llega: id_prod
if($_POST){
    $consult=mysqli_query($conexion,"DELETE FROM `productos` WHERE id_prod=$id_prod");
}