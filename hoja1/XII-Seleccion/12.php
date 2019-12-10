<?php
//variables
$horas= 0;
$minutos=0;
$segundos=0;
$segundos2=0;
//datos
$horas=$_REQUEST['uno'];
$minutos=$_REQUEST['dos'];
$segundos=$_REQUEST['tres'];
//procesado
echo "<div>";
echo "la hora dada es $horas:$minutos:$segundos";
echo "</div>";
$segundos2=$segundos+1;
echo "<div>";
echo "la hora resultante es $horas:$minutos:$segundos2";
echo "</div>";