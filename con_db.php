<?php

$conex=new mysqli("localhost","u981249563_vinos","Pca70071","u981249563_buscadorVinos");
if ($conex->connect_error) {
    die("Conexión fallida: " . $conex->connect_error);
}
?>