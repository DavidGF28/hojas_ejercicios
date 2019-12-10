<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $datos = array (20,40,790,234,890);
        $todo = max($datos);
        foreach ($datos as $key => $value){
            $datos[$key] =(int) (100*$datos[$key]/$todo);
        }
        var_dump($datos);
        
        foreach($datos as $value){
            for ($c = 0; $c < $value; $c++){
                echo "*";
            }
            echo "<br>";
        }
        ?>
    </body>
</html>
