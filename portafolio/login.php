<?php
    if($_POST){
        if($_POST['usuario'] =='Lobaton' && $_POST['contrasenia'] == '12345678'){
            header('location:index.php');
        }else{ 
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
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container">
       <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <br/>
            <div class="card">
                <div class="card-header">
                    Iniciar Sesión
                </div>
                <div class="card-body">
                    <form action="login.php" method="post">
                        <br/>
                        USUARIO <input type="text" class="form-control" name="usuario" id="">
                        <br/>
                        CONTRASEÑA <input type="password" class="form-control" name="contrasenia" id="">
                        <br/>
                        <button class="btn btn-success" type="submit">Acceder</button>
                    </form>
                </div>
                <div class="card-footer text-muted"></div>
            </div>
        </div>
        <div class="col-md-4"></div>
       </div>
    </div>
</body>
</html>