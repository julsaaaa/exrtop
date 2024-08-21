<?php
$database = "carrito";


$con = mysqli_connect("localhost", "root", "",$database);
if(!$con){
  die("no hay conexion");
}
?>