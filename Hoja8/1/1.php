<?php
class Usuario{
    var $nombre="defecto";
    function set_usuario(){
        $this-> nombre="Ramon";
    }
}

$persona=new Usuario();
echo $persona->nombre;
$persona-> nombre="Silvia";
var_dump($persona);