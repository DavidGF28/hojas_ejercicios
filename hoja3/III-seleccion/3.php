<?php
//variables
$numero=0;
$salida= "";
//datos
$numero=$_REQUEST['uno'];
//procesado
switch ($numero) {
	case 1:
		$salida = 'Lunes';
		break;
	case 2:
		$salida = 'Martes';
		break;
	case 3:
		$salida = 'Miercoles';
		break;
	case 4:
		$salida = 'Jueves';
		break;
	case 5:
		$salida = 'Viernes';
		break;
	case 6:
		$salida = 'Sabado';
		break;
	case 7:
		$salida = 'Domingo';
		break;
	default:
		$salida = 'no valido';
	}
        
        echo $salida;