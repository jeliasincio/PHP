<?php
    $json = '[
        {"nombre":"Edwin", "apellidos":"Elias Incio"},
        {"nombre":"Katty", "apellidos":"Silva Damian"}
    ]';

    $resultado = json_decode($json);
    
    foreach ($resultado as $persona){
        echo $persona->nombre." ".$persona->apellidos."<br/>";
    }
?>