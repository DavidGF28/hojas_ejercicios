<?php
$numero1= 0;
$resto=0;
$numero1=$_REQUEST['uno'];
$resto=$numero1%2;

if($resto==0)
{echo "numero1 es par";}
else 
{echo "numero1 es impar";}