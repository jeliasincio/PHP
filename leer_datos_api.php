<link rel="stylesheet" href="css/miCss.css">
<?php
$url = 'https://api.dailymotion.com/videos?channel=sport&limit=10';
//creamos un array para leer los datos de la url
$opciones = array("ssl" => array("verify_peer" => false, "verify_peer_name" => false));

//Función para leer todo el contenido y convertirlo a un string y poder decodifcarlo
$respuesta = file_get_contents($url, false, stream_context_create($opciones));

//decodificamos los datos de la url.
$objRespuesta = json_decode($respuesta);

//print_r($objRespuesta)
?>
<div class="centrarTabla">
    <table>
        <tr>
            <td>Title</td>
            <td>Channel</td>
        </tr>
        <?php foreach ($objRespuesta->list as $video) { ?>
            <tr>
                <td><?php echo ($video->title); ?></td>
                <td><?php echo ($video->channel); ?></td>
            </tr>
        <?php } ?>
    </table>
</div>