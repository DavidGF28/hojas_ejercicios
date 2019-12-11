<?php
//variables
$numero1=0;
$numero2=0;
$salida= "";
//datos
$numero1=$_REQUEST['uno'];
$numero2=$_REQUEST['dos'];
//procesado
if ($numero1>$numero2){
    $salida="tipo 1";
}else
{if ($numero2==$numero1){
 $salida="tipo 2";
}else
{if ($numero2>10){
 $salida="tipo 31";
}else
{$salida="tipo 32";}
;}}

echo $salida;