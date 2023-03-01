<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/cabecera.css">
        <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<div align="center" class="card card-container">
            <form class="form-signin" method="POST" action="sesion.php">
       

                <h1 class="animate__animated animate__backInLeft" >MICROTECH SERVICE</h1>
                <br>
                <img id="profile-img" class="profile-img-card" src="../../images/usuario.png" width=20% height=10% />

                <br>
                <br>
                <label>Correo</label>
                <input type="email" name="Correo" class="form-control" placeholder="correo"  required>
                <label>Clave</label>
                <input type="password" name="Password" class="form-control" placeholder="escriba su clave" required>
                <br>
                <input type="submit" class="btn btn-info" name="login" value="INGRESAR AL SISTEMA">


    </div>

    <footer class="page-footer font-small" style="background-color: #343A40; color: #FFF; margin-top: 150px">


    </footer>





    </form>

</body>

</html>