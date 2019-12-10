<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $alumnos= array();
        $alumnos[]="Ramon";
        $alumnos[]="Jose";
        $alumnos[]="Pepe";
        $alumnos[]="Ana";
        
        $alumnos1=array("Ramon","Jose","Pepe","Ana");
        
        for($c=0;$c<count($alumnos);$c++){
            echo"$alumnos[$c]<br>";
        }
        
        foreach ($alumnos1 as $value){
            echo "$value<br>";
        }
        ?>
    </body>
</html>


