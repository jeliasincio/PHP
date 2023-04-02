<?php
        $txtNombre="";
        $lenguaje="";
        $chkphp="";
        $chkjavascript="";
        $chkcs="";
        $deporte="";
        $comentario="";

        if($_POST){ 
            $txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
            $lenguaje = (isset($_POST['lenguaje']))? $_POST['lenguaje']:"";
            $chkphp = (isset($_POST['chkphp'])=="si")? "checked":"";
            $chkjavascript = (isset($_POST['chkjavascript'])=="si")? "checked":"";
            $chkcs = (isset($_POST['chkcs'])=="si")? "checked":"";
            $deporte = (isset($_POST['deporte']))? $_POST['deporte']:"";
            $comentario = (isset($_POST['comentario']))? $_POST['comentario']:"";
    }
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/miCss.css">
    <title>Formulario</title>
</head>
<body>
    <form action="formulario.php" method="post">
        <div> Nombre: <input type="text" name="txtNombre" id="" value="<?php echo $txtNombre;?>"></div>    
        <div>¿Qué tecnología te gusta más?</div>
        <div><input type="radio" <?php echo ($lenguaje==="php")? 'checked':"" ?> name="lenguaje" value="php">PHP </div>
        <div><input type="radio" <?php echo ($lenguaje==="javascript")? 'checked':"" ?> name="lenguaje" value="javascript">JavaScript </div>
        <div><input type="radio" <?php echo ($lenguaje==="c#")? 'checked':"" ?> name="lenguaje" value="c#">C# </div>    
        <div>¿Qué estas aprendiedno?</div>
        <div><input type="checkbox" <?php echo $chkphp;?> name="chkphp" value="si">PHP </div>
        <div><input type="checkbox" <?php echo $chkjavascript;?> name="chkjavascript" value="si">JavaScript </div>
        <div><input type="checkbox" <?php echo $chkcs;?> name="chkcs" value="si">C# </div>
        <div>¿Cual es tu deporte favorito?</div>
        <div>
            <select name="deporte" id="">
                <option value="">Seleccione: </option>
                <option value="ajedrez" <?php echo ($deporte=="ajedrez")?"selected":"";?> >Ajedrez</option>
                <option value="futbol" <?php echo ($deporte=="futbol")?"selected":"";?> >Fútbol</option>
                <option value="voley" <?php echo ($deporte=="voley")?"selected":"";?> >Voley</option>
            </select><br/><br/>
        </div>
        <div>Si tienes alguna duda escríbenos un comentario:</div>
        <div>
            <textarea name="comentario" id="" cols="30" rows="10"><?php echo $comentario?></textarea>
        </div>
        <input type="submit" value="Enviar Información">
    </form>  

    <div class="datos">
        <hr width="500px" align="center">
        <?php
            if($_POST){?>
             <?php echo "Hola mi nombre es: "."<strong>".$txtNombre."</strong>"."<br/>"?>
             <?php echo "Mi lenguaje de Programación favorito es: "."<strong>". $lenguaje."</strong>"."<br/>"?>
             <?php echo "Estoy aprendiedno: <br/>";?>
             <?php echo ($chkphp=="checked")?"- <strong>PHP</strong>":"";?>
             <?php echo ($chkjavascript=="checked")?"- <strong>JAVASCRIPT</strong>":"";?>
             <?php echo ($chkcs=="checked")?"- <strong>C#</strong>":"";?>
             <?php echo "<br/>Tu deporte favorito es: <strong>".$deporte."</strong><br/>" ?>
             <?php echo "Tu comentario es: <br/>".$comentario?>

            <?php } ?>
    </div>
</body>
</html>
