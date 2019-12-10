<!DOCTYPE html>
<?php

        define("ruta","http://127.0.0.1/formularioBasico/");
                if(!$_REQUEST){
                    header("localizacion: " . ruta ."/10.html");
                }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        var_dump($_REQUEST);
        ?>
    </body>
</html>
