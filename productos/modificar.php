<?php 
$conexion= mysqli_connect("localhost", "root","","ecommerce");
extract($_POST);
// Las variables que llegan por post son: id_prod / nombre_prod / descrip_prod / precio_prod / stock_prod / cat_prod / img_prod

if($_POST){
$modificar=mysqli_query($conexion,"UPDATE `productos` SET `id_prod`=$id_prod,`nombre_prod`='$nombre_prod',`descripcion_prod`='$descrip_prod',`precio_prod`='$precio_prod',`stock_prod`='$stock_prod',`cat_prod`='$cat_prod',`img_prod`='$img_prod' WHERE id_prod=$id_prod");
}