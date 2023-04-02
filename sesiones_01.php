<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        echo 'Se mantiene la sesión iniciada en esta pagina',"<br/>";
        echo "Usuario: ".$_SESSION['usuario']."<br />"."Status: ".$_SESSION['status']."<br />";
    }else{
        echo "No existe datos<br />";
    }
    
?>