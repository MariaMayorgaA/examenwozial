<?php

require 'functions.php';

$about = getAbout();
$mision = $about['mision'];
$vision = $about['vision'];
$valores = $about['valores'];

$informationW = getInfo();
$telefono = $informationW['telefono'];
$correo = $informationW['correo'];
$facebook = $informationW['facebook'];
$insta = $informationW['insta'];
$direccion = $informationW['direccion'];
