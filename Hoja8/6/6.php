<!DOCTYPE html>
        <?php
        include_once 'Vehiculo.php';
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $ford=new Vehiculo("DHH2323", "rojo", false);
        $ford=mensaje();
        var_dump($ford);
        ?>
    </body>
</html>
