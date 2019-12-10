<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $dia="hoy";
        switch ($dia):
            case "Lunes":
                echo "Hoy es Lunes";    
                break;
            case "Martes":
                echo "Hoy es Martes";    
                break;
            case "Miercoles":
                echo "Hoy es Miercoles";    
                break;
            case "Jueves":
                echo "Hoy es Jueves";    
                break;
            case "Viernes":
                echo "Hoy es Viernes";    
                break;
            case "Sabado":
                echo "Hoy es Sabado";    
                break;
            case "Domingo":
                echo "Hoy es Domingo";    
                break;
            default:
                echo "no se";
        endswitch;
        ?>
    </body>
</html>
