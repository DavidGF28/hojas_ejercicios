<?php
//variables
$c= "";
//datos
$c=$_REQUEST['uno'];
//procesado
	do {
		echo '<div>',$c,'</div>';
		$c = $c-2;
	} while ($c>10);
?>        
