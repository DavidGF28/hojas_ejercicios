<?php
//variables
$numero1= 0;
$numero2= 0;
//datos
$numero1=$_REQUEST['uno'];
$numero2=$_REQUEST['dos'];
//procesado
if ($numero1>$numero2)
{    echo "el numero $numero1 es mayor";}
else
{if ($numero2>$numero1)
{    echo "el numero $numero2 es mayor";}
else
{echo "son iguales";}
}