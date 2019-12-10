<?php

$numero1= 0;
$numero2=0;
$totalsum=0;
$totalres=0;
$totalmul=0;
$totaldiv=0;
$numero1=$_REQUEST['uno'];
$numero2=$_REQUEST['dos'];
$totalsum=$numero1+$numero2;
$totalres=$numero1-$numero2;
$totalmul=$numero1*$numero2;
$totaldiv=$numero1/$numero2;

echo "la suma de $numero1 y $numero2 es $totalsum";
?>
<html><br></html>
<?php
echo "la resta de $numero1 y $numero2 es $totalres";
?>
<html><br></html>
<?php
echo "la multiplicacion de $numero1 y $numero2 es $totalmul";
?>
<html><br></html>
<?php
echo "la division de $numero1 y $numero2 es $totaldiv";
?>