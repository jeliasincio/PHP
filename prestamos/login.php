<?php
session_start();
if ($_POST) {
    if (($_POST['usuario'] == "lobaton") && ($_POST['contrasenia'] == "12345")) {
        $_SESSION['usuario'] = "lobaton";
        header('location:index.php');
    } else {
        echo "<script>alert('Usuario o contraseña incorrecto.');</script>";
    }
}
?>
<!doctype html>
<html lang="es">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/login.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

    <div class="card login-box  ">
        <div class="card-header text-center">
            <h5> Iniciar Sesión</h5>
        </div>
        <div class="card-body">
            <form action="login.php" method="post">

                <label for=""> USUARIO</label> <input type="text" class="form-control" required name="usuario" id="">
                <br />
                CONTRASEÑA <input type="password" class="form-control"required name="contrasenia" id="">
                <br />
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary" type="submit">Acceder</button>
                </div>
            </form>
        </div>
        <div class="card-footer text-primary text-center">CrediSilva - 2023</div>
    </div>

</body>

</html>