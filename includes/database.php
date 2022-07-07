<?php

$db = mysqli_connect('localhost', 'root', '', 'wozial');

if (!$db) {
    echo "Error en la conexion";
}
