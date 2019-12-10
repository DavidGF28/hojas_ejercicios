<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $v1 = 0;
            $v2 = $v3 = $v4 = 0;
            $v5= array(0,0,0,0,0);
            foreach ($GLOBALS as $indice => $value) {
               //echo "<br>$indice:$value";
               echo "<br>$indice:";
               var_dump($value);
}

            foreach($v5 as $key=> $value) {
                echo "<br>\$v5[$key]=$value";
}

        ?>
    </body>
</html>
