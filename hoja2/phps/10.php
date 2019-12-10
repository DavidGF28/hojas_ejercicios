<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $cadena1= "Ramon Abramo";
        $cadena2="ramon@alpeformacion.es";
        $cadena=$cadena1 . "-" . $cadena2;
        
        for($c=0;$c<strlen($cadena); $c++){
            echo "$cadena[$c]<br>";         
        }
        
        $vArray= str_split($cadena);
                foreach ($vArray as $value){
                    echo "$value<br>";
                }
        ?>
    </body>
</html>
