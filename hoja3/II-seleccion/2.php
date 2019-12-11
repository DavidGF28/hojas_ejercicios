<?php
//variables
$n1=0;
$n2=0;
$n3=0;
//datos
$n1=$_REQUEST['uno'];
$n2=$_REQUEST['dos'];
$n3=$_REQUEST['tres'];
//procesado
if ($n1==$n2){
    echo "no son distintos";
}else
{if ($n1==$n3){
 echo "no son distintos";
}else
{if ($n2==$n3){
 echo "no son distintos";
}else
{echo "son distintos";}
;}}
