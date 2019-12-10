<?php

$numero1= 0;
$long=0;
$area=0;
$vol=0;

$numero1=$_REQUEST['uno'];
echo "tu numero es $numero1";
?>
<html><br></html>
<?php
$long= 2*pi()*$numero1;
echo "la longitud es $long";
?>
<html><br></html>
<?php
$area= pi()* pow($numero1,2);
echo "el area es $area";
?>
<html><br></html>
<?php
$vol= 4/3*pi()*pow($numero1,3);
echo "el volumen es $vol";