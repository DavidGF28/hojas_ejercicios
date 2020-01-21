<?php
//variables
$numero=0;
$comprobador= "";
$media=0;
//datos
$numero=(int)$_REQUEST['uno'];
//procesado
    do{
        $media=$media+$numero;
        echo "";
        $comprobador= $comprobador+1;
        echo "";
    }while ($x<=$tope);


