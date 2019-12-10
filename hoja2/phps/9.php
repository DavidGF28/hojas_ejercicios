<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nombreCompleto="Ramon Abramo - ramon@alpeformacion.es";
                $vArray= str_split($nombreCompleto);
                foreach ($vArray as $value){
                    echo "$value";
                }
        ?>
    </body>
</html>

