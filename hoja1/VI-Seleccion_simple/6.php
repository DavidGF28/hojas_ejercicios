<?php
//variables
$numero1= 0;
$numero2= 0;
$numero3= 0;
$menor= 0;
//datos
$numero1=$_REQUEST['uno'];
$numero2=$_REQUEST['dos'];
$numero3=$_REQUEST['tres'];
//procesado
if ($numero1<$numero2)
{if ($numero1<$numero3)
{$menor=$numero1;} 
else
{$menor=$numero3;}
}
else
{if ($numero2<$numero3)
{$menor=$numero2;}
else
{$menor=$numero3;}
}
echo "el numero menor es $menor";