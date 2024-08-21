<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/styles/bootstrap4/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="assets/styles/responsive.css">
<link rel="stylesheet" href="assets/styles/loader.css">
<link rel="stylesheet" href="assets/styles/style2.css">
    
    <title>Registro</title>
</head>
<body>
    <main>
        <center>
        <form action="register.php" method="POST" class="formu">
            <div class="title">
                 <legend>
                    <strong>CREAR CUENTA DE USUARIO</strong>
                 </legend>
            </div>
            <br>
            <input type="text" name="nombre" placeholder="Nombre" class="input-50" required>
            <input type="mail" name="email" placeholder="Correo Electronico" class="input-50" required>
            <input type="password" name="password" placeholder="Contraseña" class="input-50" required>
			<center><input type="submit" value="Registrarse" name="Registrarse" class="button" required/></center>
            <br>
            <br>
            <br>
            
        </form>
        <center><input type="submit" value="Volver" class="button" required/><a href="index.php"></a></center>
    </center>
    </main>
    
</body>
</html>