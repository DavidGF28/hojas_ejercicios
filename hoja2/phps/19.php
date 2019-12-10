<?php
if (!empty($_REQUEST)) {
    if ($_REQUEST["numero"]>0){
        $caso ="bien";
    } else {
        $caso ="mal";
    }
}else {
        $caso ="mal";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            input[type="number"]{
                width: 300px;
            }
            .obligatorio::before{
                content: "Obligatorio";
                min-width: 150px;
                display: inline-block;
            }
            .noObligatorio::before{
                content: "opcional";
                min-width: 150px;
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <?php
        if ($caso == "bien"){
            var_dump($_REQUEST);
        } else {
        ?>
        <div>
            <form name="f">
                <div class="obligatorio"><input required placeholder="Introduce un numero" step="1" min="1" max="100" type="number" name="numero"</div>
                 <div class="noObligatorio"><input required placeholder="Introduce otro numero" step="1" min="1" max="100" type="number" name="numero1"</div>
                <input type="submit" value="Enviar" name="boton"/>
            </form>
        </div>
        <?php
        }
         ?>
    </body>
</html>