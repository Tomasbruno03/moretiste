<?php 
$conexion= mysqli_connect("localhost", "root","","ecommerce");
extract($_POST);
if($_POST){
$reinicio=mysqli_query($conexion,"ALTER TABLE productos AUTO_INCREMENT = 1");

$insentar=mysqli_query($conexion,"INSERT INTO `productos`(`id_prod`, `nombre_prod`, `descripcion_prod`, `precio_prod`, `stock_prod`, `cat_prod`, `img_prod`) VALUES ('','$nombre_prod','$descripcion_prod','$precio_prod','$stock_prod','$cat_prod','$img_prod')");
}