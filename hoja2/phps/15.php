<!DOCTYPE html>
<?php

        define("ruta","http://127.0.0.1/hoja1/");
                if(!$_REQUEST){
                    header("localizacion: " . ruta ."/15.html");
                }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        extract($_REQUEST);
        echo $nombre;
        ?>
    </body>
</html>
