<?php

function getAbout(): array
{
    try {
        require 'database.php';


        $sql = 'SELECT * FROM nosotros;';
        $query = mysqli_query($db, $sql);

        $information = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($query)) {
            $information['id'] = $row['id'];
            $information['mision'] = $row['mision'];
            $information['vision'] = $row['vision'];
            $information['valores'] = $row['valores'];
            $i++;
        }
        return $information;
    } catch (\Throwable $th) {
        //throw $th;
        var_dump($th);
    }
}

getabout();

function getInfo(): array
{
    try {
        require 'database.php';


        $sql = 'SELECT * FROM wozial_info;';
        $query = mysqli_query($db, $sql);

        $informationWozial = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($query)) {
            $informationWozial['id'] = $row['id'];
            $informationWozial['telefono'] = $row['telefono'];
            $informationWozial['correo'] = $row['correo'];
            $informationWozial['facebook'] = $row['facebook'];
            $informationWozial['insta'] = $row['insta'];
            $informationWozial['direccion'] = $row['direccion'];
            $i++;
        }
        return $informationWozial;
    } catch (\Throwable $th) {
        //throw $th;
        var_dump($th);
    }
}

getInfo();
