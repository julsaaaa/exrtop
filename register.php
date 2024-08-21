<?php
  include("Conexion2.php");
  if(strlen($_POST["nombre"])>=1 && strlen($_POST["email"])>=1 && strlen($_POST["password"])>=1){
    $name=trim($_POST['nombre']);
    $email=trim($_POST['email']);
    $pass=trim($_POST['password']);
    $permisos = "user";

    $query = mysqli_query($con, "SELECT * FROM usuario WHERE nombre='".$name."' and password = '".$pass."' and email ='".$email."'");
    $nr = mysqli_num_rows($query);
    if ($nr==0) {    
    $registro="INSERT INTO usuario(nombre, email, password) VALUES('$name','$email','$pass')";
    $resultado = mysqli_query($con, $registro); 
    if($resultado){
        echo "tu registro se a completado";
        header("index.php");

    } else{
         echo "Ocurrio un error";
    } 
}else{
        echo "Llene todos los campos";
    }
}
  if ($nr>=1) {
    echo "Cuenta ya existente";
  }


?>