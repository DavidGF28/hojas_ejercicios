<?php
require 'Vehiculo.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $ford=new Vehiculo ("DHH2323","rojo",false);
        var_dump($ford);
        $ford->apagar();
    //    $renault=new Vehiculo ();
    //    var_dump($renault);
        ?>
    </body>
</html>