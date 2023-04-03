<?php
    session_start();
    // creamos las variales de sesion
    $_SESSION['usuario'] = "lobo";
    $_SESSION['status'] = "logueado";
    
    echo "Sesión iniciada: "."<br />";
    echo "Usuario: ".$_SESSION['usuario']."<br />"."Status: ".$_SESSION['status']."<br />";
 
?>