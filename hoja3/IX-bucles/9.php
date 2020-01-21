<?php
//variables
$tope=0;
$x= "";
$a=0;
//datos
$tope=(int)$_REQUEST['uno'];
//procesado
if ($tope<=1){
    echo $tope;
}else{
    $x=1;
    do{
        $a=$a+$x;
        $x=$x+2;
        
    }while ($x<=$tope);
    echo "la suma de los valores impares es $a";
    };