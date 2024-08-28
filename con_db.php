<?php

$conex=new mysqli("localhost","root","","vinos");
if ($conex->connect_error) {
    die("Conexión fallida: " . $conex->connect_error);
}
?>