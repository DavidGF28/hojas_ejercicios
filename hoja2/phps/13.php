<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            *{
                margin: 0px;
                padding: 0px;
            }
            span{
                width: 10px;
                height: 50px;
                background-color: #001ee7;
                display: inline-block;
            }
            div{
                height: 50;
                display: inline-block;
                border: 5px solid #CCC;
                margin: 20px;
            }
        </style>
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
            echo "<div>";
            for ($c = 0; $c < $value; $c++){
                echo "<span></span>";
            }
            echo "</div>";
            echo "<br>";
        }
        ?>
    </body>
</html>
