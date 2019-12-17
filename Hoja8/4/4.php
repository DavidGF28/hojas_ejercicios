<?php
    include 'Coche.php';
    ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $coche = new Coche();       //Instanciamos la clase Coche/Carro
        $coche->color='Rojo';       //Llenamos algunas de las propiedades
        $coche->marca='Honda';      
        $coche->numero_puertas=4;   
        $coche->llenarTanque(10);   //utilizamos los metodos
        $coche->acelerar();
        $coche->acelerar();
        $coche->acelerar();
        var_dump($coche);
        ?>
    </body>
</html>
